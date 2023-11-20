<?php
  include_once 'header.php'
?>
    
    <div class="wrapper">
        <section class="index-intro">
            <?php
             if (isset($_SESSION["useruid"])) {
                    echo "<p class=intro>Hello there " . $_SESSION["useruid"] . "</p>";
                  }
            ?>      
            <h1 class="logo">AugmentedMotors</h1>
            <h1 class="welcome">Welcome!</h1>
            <p>To Augmented Motors,<br>
               Your vehicle rental solution.</p><br>
        </section>


        <section class="index-categories">
            <h2>What are you looking for?</h2><br>
            <div class="index-categories-list">
              <div class="cars">
                   <img id="samples"src="images/beetle.jpg" alt="Hatchbacks">
                   <div class="Description">
                     <p>Hatchbacks</p>
                    </div>
              </div> 
              <div class="cars">
                   <img id="samples" src="images/c180.jpg" alt="Sedans">
                   <div class="Description">
                     <p>Sedans</p>
                    </div>
             </div>
             <div class="cars">
                   <img id="samples" src="images/legacy.jpg" alt="Wagons">
                   <div class="Description">
                     <p>Wagons</p>
                    </div>
            </div>
            <div class="cars">
                   <img id="samples" src="images/forester.webp" alt="Crossover SUVs">
                   <div class="Description">
                     <p>Crossover SUVs</p>
                    </div>
            </div>
            <div class="cars">
                   <img id="samples" src="images/fortuner.jpg" alt="Full Size SUVs">
                   <div class="Description">
                     <p>Full Size SUVs</p>
                    </div> 
            </div>
            <div class="cars">
                   <img id="samples" src="images/gtr.webp" alt="Sport Sedans">
                   <div class="Description">
                     <p>Sport Sedans</p>
                    </div> 
            </div>
            <div class="cars">
                   <img id="samples" src="images/bike1.webp" alt="Motor Bikes">
                   <div class="Description">
                     <p>Motor Bikes</p>
                    </div> 
            </div>

            </div>
                             
                                
            
        </section>
    </div>
    

<?php
  include_once 'footer.php'
?>

</body>
</html>


<style>
    .index-categories{
        background-color: color-mix(in srgb, aquamarine , transparent 90%);
        background-attachment: fixed;
        padding: 30px;
        border-radius: 20px;
    }
    
    .wrapper{
        display: block;
        text-align: center;
    }
    .logo{
        font-family: 'Wallpoet', sans-serif;
        font-size: 2.4em;
        text-align: left;
        padding:20px;
    }
    .logo:hover{
        cursor: pointer;
    }
    .welcome{
        font-size: 3.5em;
    }
    p{
        font-size:2em ;
    }

    .intro{
        font-size: 1em;
        color: green;
    }
    .index-categories-list{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 15px;
        

    }
    h2{
        font-size: 1.9em;
    }
     .index-categories-list p{
        font-size: 1.2em;
    }
    #samples{
        width: 400px;
        height: auto;
        border-radius: 10px 10px 0 0;
        
    }
    .cars{
        border-radius: 10px;
        margin: 15px;
        background-color: aquamarine;
    } 
    .cars:hover {
        transform: scale(1.05);
        transition: all 0.1s ease-in;
        border: 2px solid #777;
        cursor: pointer;
        background-color: color-mix(in srgb, black , transparent 99.9%);
    }
    .cars:active{
        transform: scale(0.6);
        transition:all 0.5s ease-in-out;
    }
  
</style>