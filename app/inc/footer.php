<?php
/*
*   Footer file you can add your custom js files here
*   
*   
*/
?>
    
    <!-- Add your custom javascript files here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.20/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.20/js/uikit-icons.min.js"></script>
</body>
</html>
<?php
    // Final step to write in HTML file Do not wories regading this
    file_put_contents($public_path . '' . $file_name . '.html', ob_get_contents());
    ob_end_flush();
?>