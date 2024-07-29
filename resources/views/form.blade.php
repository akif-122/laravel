<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->

    <h1>Form</h1>

    <form action="" method="post" >
        @csrf
        <input type="text" name="name" placeholder="Name" ><br/>
        <input type="text" name="phone" placeholder="Phone" ><br/>
        <input type="text" name="city" placeholder="City" ><br/>
        <input type="checkbox" value="PHP" name="skill[]" id="php" >
        <label for="php">PHP</label>
        <input type="checkbox" value="Node" name="skill[]" id="node" >
        <label for="node">Node</label>
        <input type="checkbox" value="React" name="skill[]" id="react" >
        <label for="react">React</label>

        <br/>
        <br/>

        <label>Gender</label>
        <br/>
        <input type="radio" name="gender" value="Male" id="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="Female" id="female">
        <label for="female">Female</label>
        <br/>
        <label>Age</label>
        <input type="range" name="age" min="18" max="25">
        <br/>
        
        <button>Submit</button>
    </form>
    
     
</div>
