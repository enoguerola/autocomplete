<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="src/jquery.min.js"></script>
<script type="text/javascript" src="src/jquery.tokeninput.js"></script>
<link rel="stylesheet" type="text/css" href="styles/token-input.css" />
<link rel="stylesheet" type="text/css" href="styles/token-input-facebook.css" />
<link rel="stylesheet" type="text/css" href="styles/token-input-mac.css" />

<script type="text/javascript">
		
$(document).ready(function () {
			
			/*
            $("#my-text-input").tokenInput([
                {id: 7, name: "Ruby"},
                {id: 11, name: "Python"},
                {id: 13, name: "JavaScript"},
                {id: 17, name: "ActionScript"},
                {id: 19, name: "Scheme"},
                {id: 23, name: "Lisp"},
                {id: 29, name: "C#"},
                {id: 31, name: "Fortran"},
                {id: 37, name: "Visual Basic"},
                {id: 41, name: "C"},
                {id: 43, name: "C++"},
                {id: 47, name: "Java"}
            ]);
			*/
			$(document).ready(function() {
            $("#demo-input-local-custom-formatters").tokenInput([{
                "first_name": "Eva",
                "last_name": "Nugui",
                "email": "eva@eva.com",
                "url": "http://autocomplete.lan/images/eva.jpg"
            },
            {
                "first_name": "evaristo",
                "last_name": "evaristo",
                "email": "evaristo@evaristo.com",
                "url": "https://si0.twimg.com/sticky/default_profile_images/default_profile_2_normal.png"
            },
            {
                "first_name": "Pepito",
                "last_name": "pepito",
                "email": "pepito@pepito.com",
                "url": "https://si0.twimg.com/sticky/default_profile_images/default_profile_2_normal.png"
            }
          ], {
			  theme: "facebook",
			  tokenLimit: 3,
              propertyToSearch: "first_name",
              resultsFormatter: function(item){ return "<li>" + "<img src='" + item.url + "' title='" + item.first_name + " " + item.last_name + "' height='25px' width='25px' />" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" + item.first_name + " " + item.last_name + "</div><div class='email'>" + item.email + "</div></div></li>" },
              tokenFormatter: function(item) { return "<li><p>" + item.first_name + " " + item.last_name + "</p></li>" },
          });
        });

});
</script>
</head>
<body>
<input type="text" id="demo-input-local-custom-formatters" name="blah" />
</body>
</html>