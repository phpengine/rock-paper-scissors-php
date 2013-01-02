<form action="index.php">
    <input type="submit" class="startImage pointerHover" alt="Next" value="" />
    <input type="hidden" name="control" value="game" />
    <input type="hidden" name="action" value="choosePlayers" />
</form>

<?php
if ($pageVars["browser"] == "ie") {
?>
   <script type="text/javascript">alert("There are reported issues with IE. Please use Firefox or Chrome")</script>';
<?php
}
?>