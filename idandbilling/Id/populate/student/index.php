<?php
$title = 'Fill Student Details';
include("../../../../includes/header.php");
include("../../includes/nav.php");
include('../../../config/dbcon.php');

function prepareImageUrl($imageUrl)
{
    $imageUrl = preg_replace('/^\.\.\/\.\.\//', '', $imageUrl);
    return htmlspecialchars("" . $imageUrl);
}

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM idLayout WHERE id = :id");
$stmt->execute(['id' => $id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$schoolLogo = prepareImageUrl($row['logo']);
$principalSign = prepareImageUrl($row['sign']);
$bgImage = prepareImageUrl($row['bgImage']);

$id = htmlspecialchars($row['id']);
$schoolName = htmlspecialchars($row['schoolName']);
$schoolAddress = htmlspecialchars($row['schoolAdd']);
$layoutName = htmlspecialchars($row['layoutName']);
?>


<div class="d-flex justify-content-around">
    <!-- Id Card -->
    <div id="cardLayout"
        class="card mx-auto d-flex flex-column"
        style="width: 400px; height: 600px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden; background-color: #ffffff; background-image: url('<?= "../" . $bgImage ?>'); background-size: cover; background-position: center;">
        <div style="display: flex; flex-direction: column; align-items: center; margin-bottom: 10px;">
            <img id="logo" src="<?= "../" . $schoolLogo ?>" alt="School Logo" style="width: 80px; height: 80px;">
            <h3 id="SchoolName" class="card-title mt-2" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 10px;">
                <?= $schoolName ?>
            </h3>
            <p id="SchoolAddress" class="card-text pb-2" style="font-size: 0.8rem; color: #666666; line-height: 0.8;">
                <?= $schoolAddress ?>
            </p>
            <img id="profileImgCard" src="../../img/profileImage.jpg" alt="Student Image" style="width: 140px; height: 160px;">
            <h3 id="StudentNameCard" class="card-title mt-2" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 2px;">
                Name
            </h3>
            <h3 id="StudentClassCard" class="card-title" style="font-size: 1rem; font-weight: bold; margin-bottom: 10px;">
                Class
            </h3>
        </div>
        <div id="details" style="font-size: 0.8rem; font-weight:bold; color: #666666; line-height: 0.1;">
            <p id="dobCard" class="card-text pb-1 px-2">
                Date of Birth:
            </p>
            <p id="bGroupCard" class="card-text pb-1 px-2">
                Blood Group:
            </p>
            <p id="fatherCard" class="card-text pb-0 px-2">
                Father's Name:
            </p>
            <p id="addCard" class="card-text pb-0 px-2" style="word-wrap: break-word; white-space: normal; line-height: 1.3;">
                Address:
            </p>
            <p id="phNoCard" class="card-text pb-2 px-2">
                Contact:
            </p>
            <p id="validUpto" class="card-text pb-0 px-2">
                Valid Upto :
            </p>
        </div>
        <div style="position: relative; height: 100vh;">
            <div style="position: absolute; bottom: 0; right: 0; margin-top: 10px;">
                <img id="sign" src="<?= "../" . $principalSign ?>" alt="Principal Sign" style="width: 60px; height: 30px;">
            </div>
        </div>
    </div>

    <!-- Populate Method Select -->
    <div class="justify-content-center mx-auto d-flex flex-column">
        <button type="button" class="btn btn-outline-primary mb-4 btn-lg" data-bs-toggle="modal" data-bs-target="#excelModal">Upload Excel</button>
        <button type="button" class="btn btn-outline-primary mt-4 btn-lg" data-bs-toggle="modal" data-bs-target="#singleModal">Make Single Id</button>
    </div>
</div>

<!-- Excel Modal -->
<div class="modal fade" id="excelModal" tabindex="-1" aria-labelledby="excelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="excelModalLabel">Upload Excel</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="layoutId" value="<?= $id ?>">
                <div class="section mb-2">
                    <h6>Upload Excel File :</h6>
                    <input type="file" id="excelFile" name="excelFile" accept=".xlsx, .xls" alt="excelFile">
                </div>
                <div class="section mb-2">
                    <h6>Upload Zip File (Containing Images):</h6>
                    <input type="file" id="zipFile" name="zipFile" accept=".zip">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" id="cancelButton">Close</button>
                <button type="button" class="btn btn-outline-success" id="excelExportButton">Export</button>
            </div>
        </div>
    </div>
</div>

<!-- Single Id Modal -->
<div class="modal fade" id="singleModal" tabindex="-1" aria-labelledby="excelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="excelModalLabel">Enter Student Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="layoutId" value="<?= $id ?>">
                <div class="section mb-2">
                    <h6>Upload Student Image:</h6>
                    <input type="file" id="profileImgInput" name="profileImg" accept="image/*" alt="profileImg" required>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" id="StudentNameInput" class="form-control" name="StudentName" placeholder="" required>
                    <label for="StudentNameInput">Enter Student Name</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" id="StudentClassInput" class="form-control" name="StudentClass" placeholder="" required>
                    <label for="StudentClassInput">Enter Class</label>
                </div>
                <div class="form-floating mb-2">
                    <input id="dobInput" class="form-control" type="date" />
                    <label for="dobInput">Select Date Of Birth</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" id="bGroupInput" class="form-control" name="bGroup" placeholder="" required>
                    <label for="bGroupInput">Enter Blood Group</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" id="fatherInput" class="form-control" name="father" placeholder="" required>
                    <label for="fatherInput">Enter Father's Name</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" id="addInput" class="form-control" name="add" placeholder="" required>
                    <label for="addInput">Enter Address</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" id="phNoInput" class="form-control" name="phNo" placeholder="" required>
                    <label for="phNoInput">Enter Contact Number</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="date" id="validity" class="form-control" name="validity" placeholder="" required>
                    <label for="validity">Valid Upto</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" id="cancelButton">Close</button>
                <button type="button" class="btn btn-outline-success" id="singleExportButton">Export</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<!-- Single Upload script -->
<script>
    document.getElementById("singleExportButton").addEventListener("click", function() {
        // Get input values
        let studentName = document.getElementById("StudentNameInput").value;
        let studentClass = document.getElementById("StudentClassInput").value;
        let dob = formatDate(document.getElementById("dobInput").value);
        let bloodGroup = document.getElementById("bGroupInput").value;
        let fatherName = document.getElementById("fatherInput").value;
        let address = document.getElementById("addInput").value;
        let contact = document.getElementById("phNoInput").value;
        let validity = formatDate(document.getElementById("validity").value);

        // Set values to the card
        document.getElementById("StudentNameCard").textContent = studentName;
        document.getElementById("StudentClassCard").textContent = "Class: " + studentClass;
        document.getElementById("dobCard").textContent = "Date of Birth: " + dob;
        document.getElementById("bGroupCard").textContent = "Blood Group: " + bloodGroup;
        document.getElementById("fatherCard").textContent = "Father's Name: " + fatherName;
        document.getElementById("addCard").textContent = "Address: " + address;
        document.getElementById("phNoCard").textContent = "Contact: " + contact;
        document.getElementById("validUpto").textContent = "Valid Upto: " + validity;

        // Handle Image Upload
        let imgInput = document.getElementById("profileImgInput");
        let cardImg = document.getElementById("profileImgCard");

        if (imgInput.files && imgInput.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                cardImg.src = e.target.result;
            };
            reader.readAsDataURL(imgInput.files[0]);
        }

        // Delay capture to ensure updates
        setTimeout(downloadCardAsImage, 500);
    });

    // Function to format date as DD/MM/YYYY
    function formatDate(dateString) {
        if (!dateString) return "";
        let date = new Date(dateString);
        let day = String(date.getDate()).padStart(2, '0');
        let month = String(date.getMonth() + 1).padStart(2, '0');
        let year = date.getFullYear();
        return `${day}/${month}/${year}`;
    }

    // Function to download the card as an image
    function downloadCardAsImage() {
        let card = document.getElementById("cardLayout");

        html2canvas(card, {
            scale: 2
        }).then(canvas => {
            let image = canvas.toDataURL("image/jpeg", 1.0);
            let link = document.createElement("a");
            link.href = image;
            link.download = "StudentCard.jpg";
            link.click();
        });
    }
</script>

<!-- Excel Upload script -->
<script>
    document.getElementById("excelExportButton").addEventListener("click", function() {
        let formData = new FormData();
        formData.append("excelFile", document.getElementById("excelFile").files[0]);
        formData.append("zipFile", document.getElementById("zipFile").files[0]);

        fetch("upload.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(text => {
                try {
                    let data = JSON.parse(text);
                    generatePDF(data);
                } catch (error) {
                    console.error("JSON Parse Error:", error, "Response:", text);
                }
            })
            .catch(error => console.error("Fetch Error:", error));
    });

    async function generatePDF(students) {
        const {
            jsPDF
        } = window.jspdf;

        const originalWidth = 868;
        const originalHeight = 1000;
        const cardAspectRatio = originalWidth / originalHeight;

        const pdfPageWidth = 794;
        const pdfPageHeight = 1123;

        const maxCardWidth = pdfPageWidth - 40;
        const maxCardHeight = pdfPageHeight - 40;

        const widthScale = maxCardWidth / originalWidth;
        const heightScale = maxCardHeight / originalHeight;
        const scaleFactor = Math.min(widthScale, heightScale);

        const cardWidth = originalWidth * scaleFactor;
        const cardHeight = originalHeight * scaleFactor;

        const x = (pdfPageWidth - cardWidth) / 2;
        const y = (pdfPageHeight - cardHeight) / 2;

        let pdf = new jsPDF({
            orientation: "portrait",
            unit: "px",
            format: [pdfPageWidth, pdfPageHeight]
        });

        for (let student of students) {
            await fillCard(student);
            let imgData = await captureCard();

            pdf.addImage(imgData, 'JPEG', x, y, cardWidth, cardHeight);

            if (students.indexOf(student) < students.length - 1) {
                pdf.addPage();
            }
        }

        pdf.save("Student_ID_Cards.pdf");
    }

    function fillCard(student) {
        return new Promise(resolve => {
            document.getElementById("StudentNameCard").textContent = student.name;
            document.getElementById("StudentClassCard").textContent = "Class: " + student.class;
            document.getElementById("dobCard").textContent = "Date of Birth: " + student.dob;
            document.getElementById("bGroupCard").textContent = "Blood Group: " + student.bloodGroup;
            document.getElementById("fatherCard").textContent = "Father's Name: " + student.father;
            document.getElementById("addCard").textContent = "Address: " + student.address;
            document.getElementById("phNoCard").textContent = "Contact: " + student.contact;
            document.getElementById("validUpto").textContent = "Valid Upto: " + student.validity;
            document.getElementById("profileImgCard").src = student.image;

            setTimeout(() => resolve(), 300);
        });
    }

    function captureCard() {
        return new Promise(resolve => {
            html2canvas(document.getElementById("cardLayout"), {
                    scale: 3
                })
                .then(canvas => {
                    resolve(canvas.toDataURL("image/jpeg", 1.0));
                });
        });
    }
</script>

<!-- Delete Temporary files on reload -->
<script>
    window.addEventListener('load', function() {
        fetch('cleanup.php').catch(error => {});
    });
</script>



<?php include("../../../../includes/footer.php") ?>