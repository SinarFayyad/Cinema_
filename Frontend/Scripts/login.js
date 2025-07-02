axios.post('../../Backend/Models/login.php', formData)
    .then(response => {
        console.log('Form submission successful:', response.data);
    })
    .catch(error => {
        console.error('Error submitting form:', error);
    });