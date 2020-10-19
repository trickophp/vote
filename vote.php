
<head>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    //   $(function () {
    //     $('form').bind('click', function (event) {
    //     // using this page stop being refreshing 
    //     event.preventDefault();

    //       $.ajax({
    //         type: 'POST',
    //         url: 'vote-form.php',
    //         data: $('form').serialize(),
    //         success: function (response) {
	// 			var jsonData = JSON.parse(response);
    //         }
    //       });
    //     });
    //   });



	$(document).ready(function() {
		$(".button").click(function() {
			$("span").load("vote-form.php");
		});
	});
    </script>

  </head>

<form action="vote-form.php" method="post">
	<input class="button" type="submit" value="Vote" name="vote">
</form>

<span></span>