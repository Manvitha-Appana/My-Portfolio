<?php include 'header.php'; ?>
<div class="container">
    <h1>Contact Me</h1>
    <p><strong>Name:</strong> A. Manvitha</p>
    <p><strong>Phone:</strong> 9848032919</p>
    <p><strong>Email:</strong> manvitha@gmail.com</p>
    <p><strong>College:</strong> SRMAP</p>
    <p><strong>City:</strong> Vijayawada</p>
    <form id="contactForm" action="process_contact.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" required></textarea>
        </div>
        <button type="submit" class="btn-grey">Send</button>
    </form>
</div>
<?php include 'footer.php'; ?>
