(function () {
    document.querySelector('#userForm').addEventListener('submit', function (e) {
        e.preventDefault();
        $("#button").attr("disabled", true);
        // remove the success message

        //remove all error messages

        $('#success').hide();

        // var bla = $('#name').val();
        // if (bla <= 0) {
        //     console.log('me');
        //     return false
        // }
        axios.post('/contactForm', {
            'name':         document.querySelector('#name').value,
            'email':        document.querySelector('#email').value,
            'subject':      document.querySelector('#subject').value,
            'phone':        document.querySelector('#phone').value,
            'message':      document.querySelector('#message').value,
        })
            .then( (response) => {
                //remove all error messages
                const errorMessages = document.querySelectorAll('.text-danger');
                errorMessages.forEach( (element) => element.textContent = '');

                // remove all form controls with highlighted text boxes
                const formControls = document.querySelectorAll('.form-control');
                formControls.forEach( (element) => element.classList.remove('border', 'border-danger'));

                // Reset the form and add the success Message at the buttom of the page
                this.reset();
                this.insertAdjacentHTML('afterend','<div id="success" class="alert alert-success">Form submitted successfully!<a class="close" data-dismiss="alert">×</a></div>');
                // document.getElementById('success').scrollIntoView();

                // Enable the button after some seconds
                $("#button").attr("disabled", false)
            })
            .catch( (error) => {
                const errors            = error.response.data.errors;
                const firstItem         = Object.keys(errors)[0];
                const firstItemDom      = document.getElementById(firstItem);
                const firstErrorMessage = errors[firstItem][0];

                // Scroll to the error message
                // firstItemDom.scrollIntoView({behavior: "smooth"});

                //remove all error messages
                const errorMessages = document.querySelectorAll('.text-danger');
                errorMessages.forEach( (element) => element.textContent = '');

                // Show the error message
                firstItemDom.insertAdjacentHTML('afterend', `<div class="text-danger">${firstErrorMessage}</div>`);

                // remove all form controls with highlighted text boxes
                const formControls = document.querySelectorAll('.form-control');
                formControls.forEach( (element) => element.classList.remove('border', 'border-danger'));


                // Highlight the form control with red backgorund
                firstItemDom.classList.add('border', 'border-danger');

                //Enable the button
                $("#button").attr("disabled", false);
            });
    })
})();