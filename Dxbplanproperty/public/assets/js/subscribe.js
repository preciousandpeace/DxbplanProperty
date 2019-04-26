(function () {
    $("#subscribe").click(function(e){
        e.preventDefault();
        $("#subscribe").attr("disabled", true);

        axios.post('/subscribe', {
            'email':        document.querySelector('#email').value,
        })
            .then( (response) => {

                // Show the success message
                $('div.success-message').text('Thanks for subscribing');

                // remove all the error message
                $('div.error-message').text('');

                // Enable the button after some seconds
                $("#subscribe").attr("disabled", false)
            })
            .catch( (error) => {
                const errors            = error.response.data.errors;
                const firstItem         = Object.keys(errors)[0];
                const firstItemDom      = document.getElementById(firstItem);
                const firstErrorMessage = errors[firstItem][0];

                // Show the error message
                $('div.error-message').text(`${firstErrorMessage}`);

                // remove the success message
                $('div.success-message').text('');

                // Enable the button
                $("#subscribe").attr("disabled", false);
            });
    });
})();



