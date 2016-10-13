<!DOCTYPE html>
<html>
<head><scipt src="obj_fui.js"></script></head>
<body>
<p id="demo"></p>
<script>
var user = {
    name: "tom",
    say: function (words) { alert(words); }
};

document.getElementById("demo").innerHTML = user.say("honk");
</script>
Meinge eigene Startseite
    (WP even gives in the Domain name of the website into the JS funciton here as the therin defined user:<br>
    "responsive-rob.22web.org says: (alert) honk"
    and overwrites the user defined in this file.

</body>
</html>
