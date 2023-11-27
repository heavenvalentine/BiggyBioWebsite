@extends('layout.NavLogged-layout')
@section('title', 'Grade')
<link rel="stylesheet" href="asset/css/grade.css">
<link rel="stylesheet" href="asset/css/quiz.css">
@section('content')

<div class="align-items-center">
<div id="quiz">
    <h1 id="quiz-name"></h1>
    <button id="submit-button">Submit Answers</button>
    <button id="next-question-button">Next Question</button>
    <button id="prev-question-button">Previous</button>

    <div id="quiz-results">

      <p id="quiz-results-message"></p>
      <p id="quiz-results-score"></p>
      <div class="buttons text-center">
        <a href="/AAS_3" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Retry</a>
        <a href="/8thgrade" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Back</a>
      </div>

    </div>
  </div>
</div>
<script>

var all_questions = [{
  question_string: "A ________ molecule is used to split these substances.",
  choices: {
    correct: "Fat",
    wrong: ["Sugar", "Water", "Salt"]
  }
}, {
  question_string: "During hydrolysis of a disaccharide, the bond between the simple sugars breaks, and the water molecule supplies a hydrogen atom to one sugar molecule and a hydroxyl group to the other.",
  choices: {
    correct: "True",
    wrong: ["False"]
  }
}, {
  question_string: "Hydrolysis breaks down ________ into monosaccharides; fats into glycerol and fatty acids; and nucleic acids into nucleotides.",
  choices: {
    correct: "Carbohydrates",
    wrong: ["Protein", "Salt"]
  }
}, {
  question_string: "Hydrolysis requires specific enzymes.",
  choices: {
    correct: "False",
    wrong: ["True"]
  }
},
{
  question_string: "Catabolism goes from _______ molecules to ________ molecules.",
  choices: {
    correct: "Smaller; larger",
    wrong: ["Larger; smaller"]
  }
}];

var Quiz = function(quiz_name) {

  this.quiz_name = quiz_name;

  this.questions = [];
}

Quiz.prototype.add_question = function(question) {
  // Randomly choose where to add question
  var index_to_add_question = Math.floor(Math.random() * this.questions.length);
  this.questions.splice(index_to_add_question, 0, question);
}

Quiz.prototype.render = function(container) {
  var self = this;

  $('#quiz-results').hide();

  $('#quiz-name').text(this.quiz_name);

  var question_container = $('<div>').attr('id', 'question').insertAfter('#quiz-name');

  function change_question() {
    self.questions[current_question_index].render(question_container);
    $('#prev-question-button').prop('disabled', current_question_index === 0);
    $('#next-question-button').prop('disabled', current_question_index === self.questions.length - 1);


    var all_questions_answered = true;
    for (var i = 0; i < self.questions.length; i++) {
      if (self.questions[i].user_choice_index === null) {
        all_questions_answered = false;
        break;
      }
    }
    $('#submit-button').prop('disabled', !all_questions_answered);
  }

  var current_question_index = 0;
  change_question();

  $('#prev-question-button').click(function() {
    if (current_question_index > 0) {
      current_question_index--;
      change_question();
    }
  });

  $('#next-question-button').click(function() {
    if (current_question_index < self.questions.length - 1) {
      current_question_index++;
      change_question();
    }
  });

  $('#submit-button').click(function() {
    var score = 0;
    for (var i = 0; i < self.questions.length; i++) {
      if (self.questions[i].user_choice_index === self.questions[i].correct_choice_index) {
        score++;
      }

   $('#quiz-retry-button').click(function(reset) {
      quiz.render(quiz_container);
   });

    }



    var percentage = score / self.questions.length;
    console.log(percentage);
    var message;
    if (percentage === 1) {
      message = 'Great job!'
    } else if (percentage >= .75) {
      message = 'You did alright.'
    } else if (percentage >= .5) {
      message = 'Better luck next time.'
    } else {
      message = 'Maybe you should try a little harder.'
    }
    $('#quiz-results-message').text(message);
    $('#quiz-results-score').html('You got <b>' + score + '/' + self.questions.length + '</b> questions correct.');
    $('#quiz-results').slideDown();
    $('#submit-button').slideUp();
    $('#next-question-button').slideUp();
    $('#prev-question-button').slideUp();
    $('#quiz-retry-button').sideDown();

  });

  question_container.bind('user-select-change', function() {
    var all_questions_answered = true;
    for (var i = 0; i < self.questions.length; i++) {
      if (self.questions[i].user_choice_index === null) {
        all_questions_answered = false;
        break;
      }
    }
    $('#submit-button').prop('disabled', !all_questions_answered);
  });
}

var Question = function(question_string, correct_choice, wrong_choices) {
  this.question_string = question_string;
  this.choices = [];
  this.user_choice_index = null;

  this.correct_choice_index = Math.floor(Math.random(0, wrong_choices.length + 1));

  var number_of_choices = wrong_choices.length + 1;
  for (var i = 0; i < number_of_choices; i++) {
    if (i === this.correct_choice_index) {
      this.choices[i] = correct_choice;
    } else {

        var wrong_choice_index = Math.floor(Math.random(0, wrong_choices.length));
      this.choices[i] = wrong_choices[wrong_choice_index];

      wrong_choices.splice(wrong_choice_index, 1);
    }
  }
}

Question.prototype.render = function(container) {
  var self = this;

  var question_string_h2;
  if (container.children('h2').length === 0) {
    question_string_h2 = $('<h2>').appendTo(container);
  } else {
    question_string_h2 = container.children('h2').first();
  }
  question_string_h2.text(this.question_string);

  if (container.children('input[type=radio]').length > 0) {
    container.children('input[type=radio]').each(function() {
      var radio_button_id = $(this).attr('id');
      $(this).remove();
      container.children('label[for=' + radio_button_id + ']').remove();
    });
  }
  for (var i = 0; i < this.choices.length; i++) {
    var choice_radio_button = $('<input>')
      .attr('id', 'choices-' + i)
      .attr('type', 'radio')
      .attr('name', 'choices')
      .attr('value', 'choices-' + i)
      .attr('checked', i === this.user_choice_index)
      .appendTo(container);

    // Create the label
    var choice_label = $('<label>')
      .text(this.choices[i])
      .attr('for', 'choices-' + i)
      .appendTo(container);
  }

  $('input[name=choices]').change(function(index) {
    var selected_radio_button_value = $('input[name=choices]:checked').val();

    // Change the user choice index
    self.user_choice_index = parseInt(selected_radio_button_value.substr(selected_radio_button_value.length - 1, 1));

    container.trigger('user-select-change');
  });
}

$(document).ready(function() {
  var quiz = new Quiz('My Quiz');

  for (var i = 0; i < all_questions.length; i++) {
    var question = new Question(all_questions[i].question_string, all_questions[i].choices.correct, all_questions[i].choices.wrong);

    quiz.add_question(question);
  }

  var quiz_container = $('#quiz');
  quiz.render(quiz_container);
});
</script>
<footer class="text-center text-lg-start fixed-bottom">
    <!-- Copyright -->
    <div class="text-center p-3 mt-5" style="background-color: white; color:white; background-color:#19766b; font-family: 'Nunito', sans-serif;
    font-family: 'Nunito Sans', sans-serif;">
      © 2017 Copyright:
      <a class="text-white" href="/">BiggyBio</a>
    </div>
    <!-- Copyright -->
</footer>
@endsection
