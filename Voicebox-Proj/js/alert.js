
function notLoggedIn() {


    Swal.fire({
        title: 'You are not logged in!',
        confirmButtonColor: '#3085d6'

    })



}


function saveChanges() {
    Swal.fire({
        title: 'Are you sure you want to save your changes?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Save changes'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Your information has been saved!',
                window.location = 'profile.php',


            )
        }
    })
}




function deleteChanges() {
    Swal.fire({
        title: 'Are you sure you want to delete this post?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Save changes',

    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'The post has been deleted',
                window.location = 'profile.php',


            )
        }
    })
}


function delete2() {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        input: 'none',

    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                window.location = 'index.php',
            )
        }
    })
}

function loggedIn() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'Signed in successfully'
    })
}

function notLogged() {

    Swal.fire({
        title: 'You are not logged in!',
        text: "To comment, you must be logged in.",
        confirmButtonColor: '#BA5D5D',
        confirmButtonText: '<b>Close<b>',
        padding: 25,
        showCancelButton: true,
        cancelButtonColor: '#BA5D5D',
        cancelButtonText: '<a href="login.php"><b>Login Now<b><a/>',


    })
}