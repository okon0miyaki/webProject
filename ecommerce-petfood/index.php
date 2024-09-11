<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">E-Commerce</div>
        <input type="search" name="" id="" class="search-bar" placeholder="Search...">
        <div class="icons">
            <a href="login.php" class="icon-sign">Sign In</a>
            <!-- <a href="user/login.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAqlJREFUSEvNlluITlEUx3/jnkt5YUJuQ2hoeFNSvCDlknhSbkkiTSQemJHrg0siKXmQXB6kJkSJF5J4FIXcbxGTS7llEPuvdbTndM759vZNfdbLzLf3f63/Weus9V+nigpZVYV4+e+JewDbgD3Ao5wq1QArgfXAx1KVDM14N7DKgg0AnqcC6+ypnQm7ui2IhwJ3gfbAUZfx/JygR4B5wE9gBPCgiDwk4wvAJOAboHK+zAnY1xE/BLoAF4HJ5RBPB85YgC3AhhIlFKbBMPI9m4cvyrgjcBtQqZuBQcCXEsRdgcdAbyt1rWu271k+RcRrge3mtBg4VKph7H4JcND+V4ydMcS9gCeAMlDWo4BfgcTtgJvASBurIVaxVu5+xgOBzYD+9gGGGVKlexZImsA0XoPtxz3gFfACWJfE8onrgb2RBLHwFcB+OfnEE4BLFul+wdjEkvWzBpXfROBymrgD8AnoDBwAlsUy5OAVa6npQHc3bj/SxPp9HphiQqAxagtTf/S32FOTgOlxksbussssTdaSGAPcsIUgaNZZEl8Pr9cmU2zp+B9LE4+2oLpTqVUm39QD6gW9J70vWdZZ4rM8aSagDriVR6zz9y6Lng7Y5ICzyyQ+BcwE3gDVfqws5ToOzAU+A9rDvnDEZKxm/eCUq5vr6mO2uf5yZxEv8uRxnGu2a96TxhCPB66Y7wK32bQ2C4kl8K8NsdH1waZ/JJYKNpqvyqxyFxLrUot/uNvDVwE9eWILbUtJxw/bYdaZrq4DY03rpdutLG877QMkbxp2NZred4zJ551NjWRY32JBxDOA04ac5WZX3Rljc9x2OmkO04BzocSStrdApxi2DGyLVexrKLFwO1yJ15RJvNVrsKBSC6SsVXJ94GkmY+0OcCLPKeQrM5YwCF8x4t/VCoUfQcCP2QAAAABJRU5ErkJggg==" class="icon"/></a> -->
        </div>
    </div>

    <ul class="menu">
        <li><a href="login.php">Cats</a></li>
        <li><a href="login.php">Dogs</a></li>
        <li><a href="#contacts">Contacts</a></li>
    </ul>

    <div class="cat-food">
        <div class="content">
            <h3><span>Cat</span> Food</h3>
            <p>Makanan kucing adalah nutrisi yang dirancang khusus untuk memenuhi kebutuhan diet kucing. 
            Makanan kucing adalah nutrisi yang dirancang khusus untuk memenuhi kebutuhan diet kucing. Kucing memiliki kebutuhan nutrisi yang berbeda dibandingkan dengan hewan lain.
            </p>
        </div>
        <div class="image">
            <img src="img/catFood.jpg" alt="Animal">
        </div>
    </div>
    <div class="dog-food">
        <div class="image">
            <img src="img/dogFood.jpg" alt="Animal">
        </div>
        <div class="content">
            <h3><span>Dog</span> Food</h3>
            <p>Makanan anjing juga dirancang khusus untuk memenuhi kebutuhan diet spesifik mereka, yang berbeda dengan kucing. 
                Anjing adalah omnivora, yang berarti mereka dapat mencerna dan memperoleh nutrisi dari berbagai sumber.</p>
        </div>
    </div>
    <div class="service">
        <h1 class="heading">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-dog"></i>
                <h3>dog boarding</h3>
                <a href="dogFood.html" class="btn">Read More</a>
            </div>
            
            <div class="box">
                <i class="fas fa-cat"></i>
                <h3>cat boarding</h3>
                <a href="catFood.html" class="btn">Read More</a>
            </div>

            <div class="box">
                <i class="fas fa-bath"></i>
                <h3>spa & grooming</h3>
                <a href="grooming.html" class="btn">read more</a>
            </div>
    
            <div class="box">
                <i class="fas fa-drumstick-bite"></i>
                <h3>healthy meal</h3>
                <a href="healthyFood.html" class="btn">read more</a>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 E-Commerce Pet Food. All rights reserved.</p>
    </footer>
</body>
</html>