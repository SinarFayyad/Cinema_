// i want to hide the register btn, take and save the user type and choose wether to show the admin settings or the user settings

axios.post('../../Backend/Models/register.php', formData)
    .then(response => {
        console.log('Sing up successful:', response.data);
    })
    .catch(error => {
        console.error('Error Sign up :', error);
    });
