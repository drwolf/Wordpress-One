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

</body>
</html>
