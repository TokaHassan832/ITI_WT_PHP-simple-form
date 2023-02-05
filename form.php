<html xmlns="http://www.w3.org/1999/html">
 <body>
 <center>
  <form action="table_data.php" method="post">
    <div>
        <label> First Name </label>
      <div>
        <input type="text" name="fname">
      </div>
    </div>

    <div>
        <label>Last Name</label>
       <div>
         <input type="text" name="lname">
       </div>
    </div>

    <div>
          <label>Address</label>
        <div>
            <textarea name="address"></textarea>
        </div>
    </div>

    <div>
        <label>Country</label>
      <div>
        <select name="country" id="country" >
        <option value="egypt">Egypt</option>
        <option value="us">US</option>
        <option value="england">England</option>
        </select>
      </div>
    </div>

    <div>
      <label>Gender</label>
        <div>
           <input type="radio" id="male" name="gender" value="male">
            <label>Male</label>
           <input type="radio" id="female" name="gender" value="female">
            <label>Female</label>
        </div>
    </div>

        <div>
            <label>Skills</label>
           <div>
            <input type="checkbox" id="php" name="skills[]" value="php">
            <label for="php">PHP</label><br>
            <input type="checkbox" id="J2SE" name="skills[]" value="J2SE">
            <label for="J2SE">J2SE</label><br>
            <input type="checkbox" id="MySQL" name="skills[]" value="MySQL">
            <label for="MySQL">MySQL</label><br>
            <input type="checkbox" id="PostgreeSQL" name="skills[]" value="PostgreeSQL">
            <label for="PostgreeSQL">PostgreeSQL</label>
           </div>
        </div>

        <div>
            <label>Username</label>
          <div>
            <input type="text" name="username">
          </div>
        </div>

        <div>
            <label>Password</label>
            <div>
                <input type="password" name="pass">
            </div>
        </div>

      <div>
          <label>Department</label>
          <div>
              <input type="text" name="department">
          </div>
      </div>

        <button type="submit" name="submit">Submit</button>
        <button type="reset" name="reset">Reset</button>
  </form>
     </center>
</body>

