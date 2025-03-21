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

    <!-- Edit Modal -->
    <div
        class="card mx-auto d-flex flex-column"
        style="width: 400px; height: 660px; padding: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow-y: auto; background-color: #ffffff;">
        <input type="hidden" name="layoutId" value="<?= $id ?>">
        <div class="section mb-2">
            <h6>Upload Excel File (if available):</h6>
            <input type="file" id="excelFile" name="excelFile" accept=".xlsx, .xls" alt="excelFile">
        </div>
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

        <div class="d-flex justify-content-evenly">
            <button type="button" class="btn btn-outline-danger mt-2" id="cancelButton">Cancel</button>
            <button class="btn btn-outline-primary mt-2" id="exportButton">Export</button>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Export Button Logic
        const exportButton = document.getElementById('exportButton');
        const excelFile = document.getElementById('excelFile');
        const profileImgCard = document.getElementById('profileImgCard');
        const defaultImgPath = '../../img/';

        if (exportButton) {
            exportButton.addEventListener('click', () => {
                if (!excelFile.files.length) {
                    alert("Please upload an Excel file.");
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(e) {sheet.forEach((row, index) => {
                        // Populate card fields from Excel data
                        document.getElementById('StudentNameCard').textContent = row.StudentName || '';
                        document.getElementById('StudentClassCard').textContent = row.Class || '';
                        document.getElementById('dobCard').textContent = "Date of Birth: " + (row.DOB || '');
                        document.getElementById('bGroupCard').textContent = "Blood Group: " + (row.BloodGroup || '');
                        document.getElementById('fatherCard').textContent = "Father's Name: " + (row.Father || '');
                        document.getElementById('addCard').textContent = "Address: " + (row.Address || '');
                        document.getElementById('phNoCard').textContent = "Contact: " + (row.Contact || '');
                        document.getElementById('validUpto').textContent = "Valid Upto: " + (row.ValidUpto || '');

                        // Set profile image from ImageName column  
                        const imageName = row.ImageName || '';
                        profileImgCard.src = imageName ? `${defaultImgPath}${imageName}` : '';

                        // Generate and download card image
                        const cardLayout = document.getElementById('cardLayout');
                        html2canvas(cardLayout).then(canvas => {
                            const link = document.createElement('a');
                            link.download = `Student_ID_${index + 1}.jpeg`;
                            link.href = canvas.toDataURL("image/jpeg", 0.8);
                            link.click();
                        });
                    });
                    const data = new Uint8Array(e.target.result);
                    const workbook = XLSX.read(data, {
                        type: 'array'
                    });
                    const sheetName = workbook.SheetNames[0];
                    const sheet = XLSX.utils.sheet_to_json(workbook.Sheets[sheetName]);

                    
                };
                reader.readAsArrayBuffer(excelFile.files[0]);
            });
        }

        // Real-time Profile Image Upload
        const profileImgInput = document.getElementById('profileImgInput');
        if (profileImgInput) {
            profileImgInput.addEventListener('change', (event) => {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        profileImgCard.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        // Real-time Input to Card Mapping
        const inputMappings = {
            StudentName: {
                input: document.getElementById('StudentNameInput'),
                cardElement: document.getElementById('StudentNameCard'),
            },
            StudentClass: {
                input: document.getElementById('StudentClassInput'),
                cardElement: document.getElementById('StudentClassCard'),
            },
            dob: {
                input: document.getElementById('dobInput'),
                cardElement: document.getElementById('dobCard'),
                label: 'Date of Birth: ',
                format: (value) => {
                    const date = new Date(value);
                    if (!isNaN(date)) {
                        const day = String(date.getDate()).padStart(2, '0');
                        const month = String(date.getMonth() + 1).padStart(2, '0');
                        const year = date.getFullYear();
                        return `${day}-${month}-${year}`;
                    }
                    return value;
                },
            },
            bGroup: {
                input: document.getElementById('bGroupInput'),
                cardElement: document.getElementById('bGroupCard'),
                label: 'Blood Group: ',
            },
            father: {
                input: document.getElementById('fatherInput'),
                cardElement: document.getElementById('fatherCard'),
                label: "Father's Name: ",
            },
            add: {
                input: document.getElementById('addInput'),
                cardElement: document.getElementById('addCard'),
                label: 'Address: ',
            },
            phNo: {
                input: document.getElementById('phNoInput'),
                cardElement: document.getElementById('phNoCard'),
                label: 'Contact: ',
            },
            validUpto: {
                input: document.getElementById('validity'),
                cardElement: document.getElementById('validUpto'),
                label: 'Valid Upto: ',
                // format: (value) => {
                //     const date = new Date(value);
                //     if (!isNaN(date)) {
                //         const day = String(date.getDate()).padStart(2, '0');
                //         const month = String(date.getMonth() + 1).padStart(2, '0');
                //         const year = date.getFullYear();
                //         return `${day}-${month}-${year}`;
                //     }
                //     return value;
                // },
            },
        };

        // Update card fields dynamically
        Object.values(inputMappings).forEach(({
            input,
            cardElement,
            label,
            format
        }) => {
            if (input) {
                input.addEventListener('input', () => {
                    const value = input.value;
                    cardElement.textContent = (label || '') + (format ? format(value) : value);
                });
            }
        });

        // Cancel Button Logic
        const cancelButton = document.getElementById('cancelButton');
        if (cancelButton) {
            cancelButton.addEventListener('click', () => {
                Object.values(inputMappings).forEach(({
                    input,
                    cardElement,
                    label
                }) => {
                    if (input) input.value = '';
                    if (cardElement) cardElement.textContent = label || '';
                });

                // Reset profile image
                profileImgCard.src = '';
            });
        }
    });
</script>



<?php include("../../../../includes/footer.php") ?>