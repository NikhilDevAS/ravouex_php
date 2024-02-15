<div class="modal-container" id="modal">
    <div class="modal-form-box">
        <div class="modal-title-container">
            <h3>{props.title}</h3>
            <div id="close-modal">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        <form action="#" method="POST" id="job-apply-form">
            <div class="single-line-div">
                <label>Title</label>
                <select name="title">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                </select>

            </div>
            <div class="grid-line-div">
                <div>
                    <label>First Name</label>
                    <input type="text" name="firstName" required />

                </div>
                <div>
                    <label>Last Name</label>
                    <input type="text" name="lastName" required />

                </div>
            </div>
            <div class="grid-line-div">
                <div>
                    <label>Date of birth</label>
                    <input type="date" name="dob" required />

                </div>
                <div>
                    <label>Phone Number</label>
                    <input type="number" name="phone" required />

                </div>
            </div>
            <div class="grid-line-div">
                <div>
                    <label>Email</label>
                    <input type="email" name="email" required />

                </div>
                <div>
                    <label>Location</label>
                    <input type="text" name="location" required />

                </div>
            </div>
            <div class="single-line-div">
                <label>Qualification</label>
                <input type="text" name="qualification" required />

            </div>
            <div class="single-line-div">
                <label>Link of CV</label>
                <input type="text" name="cv" required />

            </div>
            <div class="single-line-div">

                <label>Message (optional)</label>
                <textarea placeholder="Type here..." name="message" required></textarea>
            </div>
            <div class="form-btn-container">
                <button type="submit" id="apply-btn">Apply</button>
            </div>
        </form>
    </div>
</div>