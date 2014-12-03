<!DOCTYPE html>
<html>
<head>
    <script>
        var langId = 0;
        var otherLangId = 0;

        function addLang() {
            langId++;
            var inputDiv = document.createElement("div");
            inputDiv.setAttribute("id", "lang" + langId);
            inputDiv.innerHTML =
                "<input type='text' name='lang[]'>"+
                "<select name='progLang[]'>"+
                "<option value='begin'>Beginner</option>"+
                "<option value='adv'>Advanced</option>"+
                "<option value='exp'>Expert</option>"+
                "</select><br>";
            document.getElementById('prLanguages').appendChild(inputDiv);
        }

        function removeLang() {
            var div = document.getElementById("prLanguages");
            var lastChild = div.lastChild;
            document.getElementById('prLanguages').removeChild(lastChild);
        }

        function addOtherLang() {
            langId++;
            var inputDiv = document.createElement("div");
            inputDiv.setAttribute("id", "otherLang" + langId);
            inputDiv.innerHTML =
                "<input type='text' name='otherLang[]'>"+
                "<select name='comp[]'>"+
                "<option value='comprehension'>-Comprehension-</option>"+
                "</select>"+
                "<select name='read[]'>"+
                "<option value='reading'>-Reading-</option>"+
                "</select>"+
                "<select name='write[]'>"+
                "<option value='writing'>-Writing-</option>"+
                "</select><br>"
            document.getElementById('otherProgramLang').appendChild(inputDiv);
        }

        function removeOtherLang() {
            var div = document.getElementById("otherProgramLang");
            var lastChild = div.lastChild;
            document.getElementById('otherProgramLang').removeChild(lastChild);
        }
    </script>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Personal Information</legend>
        <input type="text" name="fname" placeholder="First Name"><br>
        <input type="text" name="lname" placeholder="Last Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="number" name="phone" placeholder="Phone Number"><br>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male<br>
        Birth Date<br>
        <input type="date" name="birthday" placeholder="dd/mm/yyyy"><br>
        Nationality<br>
        <select name="nation">
            <option value="bg">Bulgarian</option>
            <option value="gr">Greek</option>
            <option value="us">American</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Last Work Position</legend>
        Company Name <input type="text" name="lastCompany"><br>
        From <input type="date" name="wfrom" placeholder="dd/mm/yyyy"><br>
        To <input type="date" name="wto" placeholder="dd/mm/yyyy"><br>
    </fieldset>
    <fieldset>
        <legend>Computer Skills</legend>
        Programming Languages<br>
        <div id="prLanguages">
            <script>addLang();</script>
        </div>
        <a href="javascript:removeLang()"><input type="button" name="removeLang" value="Remove Language"></a>
        <a href="javascript:addLang()"><input type="button" name="addLang" value="Add Language"></a>
    </fieldset>
    <fieldset>
        <legend>Other Skills</legend>
        Languages<br>
        <div id="otherProgramLang">
            <script>addOtherLang();</script>
        </div><br>
        <a href="javascript:removeOtherLang()"><input type="button" value="Remove Language"></a>
        <a href="javascript:addOtherLang()"><input type="button" value="Add Language"></a><br>
        Driver's License<br>
        B<input type="checkbox" name="drlB">
        A<input type="checkbox" name="drlA">
        C<input type="checkbox" name="drlC">
    </fieldset>
    <input type="submit" value="Generate CV">
</form>
<?php
    
?>
</body>
</html>