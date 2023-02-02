</div>

</div>
</div>
<script src="https://localhost/bessy-forms/public/assets/libs/jquery/jquery.min.js"></script>

<!-- App js -->
<script src="https://localhost/bessy-forms/public/assets/plugins/global/plugins.bundle.js"></script>
<script src="https://localhost/bessy-forms/public/assets/js/scripts.bundle.js"></script>

<!-- Custom js -->
<script src="https://localhost/bessy-forms/public/assets/js/my-custom.js"></script>

<!-- <script type="text/javascript">

        function yesnoProject() {
            if (document.getElementById('yesProject').checked) {
                document.getElementById('ifYes').style.visibility = 'visible';
            } else {
                document.getElementById('ifYes').style.visibility = 'hidden';
            }
        }
    </script> -->
<script>
    function writtenNotice() {
        var yes = document.getElementById("ifYes");
        var written_notice = document.getElementById("written_notice");
        if (yes.checked === true) {
            written_notice.style.display = "block";
        } else {
            written_notice.style.display = "none";
        }
    }

    function similarApp() {
        var select_yes = document.getElementById("if_yes");
        var similar_app = document.getElementById("similar_app");
        if (select_yes.checked === true) {
            similar_app.style.display = "block";
        } else {
            similar_app.style.display = "none";
        }
    }

    function ifOthers() {
        var select_others = document.getElementById("if-others");
        var if_others = document.getElementById("if_others");
        if (select_others.checked === true) {
            if_others.style.display = "block";
        } else {
            if_others.style.display = "none";
        }
    }   
</script>

</script>
</body>

</html>