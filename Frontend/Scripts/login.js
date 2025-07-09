axios.post('../../Backend/Models/login.php', formData)
    .then(response => {
        console.log('Logged in successful:', response.data);
    })
    .catch(error => {
        console.error('Error logging in :', error);
    });


$user.type = response.data.userType;
localStorage.setItem('userType', $userType);
if ($userType === 'admin') {
    querySelector('.admin-settings').style.display = 'block';
}