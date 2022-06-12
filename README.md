# phpPlus

<img src= "https://github.com/phpPlus-Officiall/phpPlus/blob/main/baselogo.jpg">

is a PHP library that allows you to create static websites with PHP but has many other great features.

# Install

To use phpPlus you first need PHP on your computer. If you have installed it, navigate to the folder and execute the following command <code> php base.php</code>.


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

s
s
s
s
s
s




