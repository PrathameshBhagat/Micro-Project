<html>
    <head>
        <script>
function check(){
document.getElementsByName("lform").submit();
}
</script>
        </head>
    
    <body>
        <form name="f"action="post.php" method="post">
            <input type="number" name="N" value="N"></input>
            <button onclick="check();document.getElementByName('f').submit()">SUBMIT</button>
            </form>
    </body>
    </html>
