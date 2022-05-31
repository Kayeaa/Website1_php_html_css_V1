<h1>Contact form</h1>

<form method="POST" action="">
        <label for="name">Name: </label>
        <input id="name" placeholder="Name" 
            name="name" type="text" required><br>
        
        <label for="firstname">Firstname: </label>
        <input id="firstname" placeholder="Firstname" 
            name="firstname" type="text" required><br>

        <label for="email">E-mail:</label>
        <input id="email" placeholder="example@hotmail.com" 
            name="email" type="texte" required><br>
        
        <label for="role">Role:</label>
        <input id="role" name="role" type="text" list="browser"><br>
        
        <datalist id="browser">
            <?php
            foreach($datalist as $row) {
                echo "<option value='$row'>";
            }
            ?>
            </datalist>

<!--        datalist =
            <option value="Project Manager"></option>
            <option value="Web developer"></option>
            <option value="Communication specialist"></option>
        </datalist>
 -->
        <label for="expyears">Years of experience in the field:</label>
        <select name="expyears">
            <option disabled></option>
            <option value=">1"> 1 year</option>
            <option value="13"> 1 to 3 years</option>
            <option value=">35"> 3 to 5 years</option>
            <option value=">5"> more than 5 years</option>
            <option value=">10"> more than 10 years</option>
        </select>
        <br>
<!--type csrf (cross site request forgery) securiser les formulaire. hidden peut etre utilisé input type. 
Aussi utilisé comme clone -->

<label for="subject">Subject:</label>
<input id="subject" name="subject" type="text"><br>

<label for="comment">What would you like to discuss about?</label>
<input id="comment" name="comment" type="textarea"><br>

<label for="file">Document to share</label>
<input id="file" name="file" type="file"><br>

<input type="submit" value="Envoyer">
<br>
<br>
<label for="reset">Reset the form here:</label> 
<input id="reset" name="reset" type ="reset" >