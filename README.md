# phpPlus

<img src= "https://github.com/phpPlus-Officiall/phpPlus/blob/main/baselogo.jpg">

is a PHP library that allows you to create static websites with PHP but has many other great features.

# Install

To use phpPlus you first need PHP 8 on your computer. If you have installed it, navigate to the folder and execute the following command <code> php base.php</code>.



# Write your first programm

To write your first pogram you have to open the file <code> base.php </code>.   Now you can write in the function index your code that will be executed at startup here you can e.g. define classes, eg:

<code>  
    
     public function index()
    {
    $this->registerFunction(new TestFunction("test"));
    $this->registerHeader(new TestHeader());
    $this->registerListener(new Listener(new TestEvent()));
    /** this is executed when boot.php */
    }

</code>

# Bugs and Suggestions

s
Currently phpPlus is in version 0.1 and in BETA therefore it may still have bugs.  But we are also looking for new ideas and suggestions for phpPlus. Don't hesitate to contact us via <a href = "https://discord.gg/zjFpVGzXxM">Discord</a> or via an <a href = "https://github.com/phpPlus-Officiall/phpPlus/issues">Issue</a>!



<img src= "https://cloud.githubusercontent.com/assets/6291467/26705903/96c2d66e-477c-11e7-9f4e-f3c0efe96c9a.png">   Join our <a href = "https://discord.gg/zjFpVGzXxM">Discord</a> right now to not miss anything!

