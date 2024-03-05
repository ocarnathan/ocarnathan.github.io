<footer class="foot">
    <p>&copy; 2024 MTM Coaching. All rights reserved.</p>
</footer>
<script>
    //stores the previous scroll position when the page is loaded.
    var prevScrollpos = window.pageYOffset;
    //set up a function to run when the page is scrolled
    window.onscroll = function() {
        //get the current scroll position
        var currentScrollPos = window.pageYOffset;
        //check if the current position is less than the previous scroll position
        if (prevScrollpos > currentScrollPos) {
            //If scrolling up, set the 'top' style of the navbar to 0 (fully visible)
            document.getElementById("navbar").style.top = "0";
        } else {
            //If scrolling down, set the 'top' style of the navbar to "-50px" (hide it by moving it off-screen)
            document.getElementById("navbar").style.top = "-60px";
        }
        //update the previous scroll position to the current scroll position for the next scroll event
        prevScrollpos = currentScrollPos;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>