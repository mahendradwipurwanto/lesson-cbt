$(document).ready(function () {
	$('table.dataTables').each(function () {
		$('#' + $(this).attr('id')).DataTable({
			"language": {
				"emptyTable": '<div class="text-center p-4">' +
					'<img class="mb-3" src="../assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
					'<p class="mb-0">No data to display</p>' +
					'</div>'
			},
			"scrollX": true,
			"responsive": true
		});
	});

	//binds to onchange event of your input field
	$('input.imgprev').each(function () {
		$('#' + $(this).attr('id')).bind('change', function () {
			console.log($(this).attr('id'));
			var parent_id = $(this).attr('id').split('-')
			//this.files[0].size gets the size of your file.
			if (this.files[0].size > (1 * 1024 * 1024)) {
				Swal.fire({
					text: 'File size to large, maximum file size is 1 Mb !',
					icon: 'warning',
				})
				this.value = "";
			} else {
				const [file] = this.files
				if (file) {
					$('#' + parent_id[0] + '-preview').attr('src', URL.createObjectURL(file));
				}
			}
		})
	});

	$(".flatpickr").flatpickr({
		dateFormat: "F d, Y",
	});

	$(".flatpickrDT").flatpickr({
		dateFormat: "F d, Y H:i",
		enableTime: true,
		time_24hr: true
	});

	$(".online-action").click(function () {
		if ($(".online-card").hasClass('minimized')) {

			$(".online-card").removeClass('minimized');
			$(".online-card").addClass('maximized');
		} else {

			$(".online-card").removeClass('maximized');
			$(".online-card").addClass('minimized');
		}
	});
	//  ckeditor
	// Select all textareas with class "editor"
	const textareas = document.querySelectorAll("textarea.editor");

	// Loop through each textarea and initialize CKEditor 5
	textareas.forEach((elem) => {
		ClassicEditor
			.create(elem, {
				theme: 'bootstrap5',
				toolbar: [
					'heading',
					'bold',
					'italic',
					'|',
					'bulletedList',
					'numberedList',
					'|',
					'blockQuote',
					'mediaEmbed',
					'|',
					'undo',
					'redo'
				]
			})
			.catch(error => {
				console.error(error);
			});
	});

})

$(function () {
	$(document).on("click", function (e) {
		if ($(e.target).is(".online-card, .online-action") === false) {
			$(".online-card").removeClass("maximized");
		}
	});
});

function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : evt.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

function space(evt) {
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode == 32) {
		return false
	}
	return true
}

function isAlpha(evt) {
	var inputValue = evt.which;
	// allow letters and whitespaces only.
	if (!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0 &&
			inputValue != 8 && inputValue != 37 && inputValue != 39)) {
		return false
	}
	return true
}

function addCommaNumeric(evt) {
	$(evt.target).val(function (index, value) {
		return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	});
}

function addThousandComma(event) {
	event.target.value = event.target.value.toLocaleString('en-US');
}

function numComma(evt) {
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46) {
		return false;
	}
	return true;
}

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#blah').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

function toBase64(file) {
	return new Promise((resolve, reject) => {
		const reader = new FileReader();
		reader.readAsDataURL(file);
		reader.onload = () => resolve(reader.result);
		reader.onerror = error => reject(error);
	});
}


function prettyJson() {
	var ugly = document.getElementById('textJson').value;
	var obj = JSON.parse(ugly);
	var pretty = JSON.stringify(obj, undefined, 4);
	document.getElementById('textJson').value = pretty;
}

function initCountdown(targetDateStr, targetElementId) {
  const targetElement = document.getElementById(targetElementId);

  const countdownInterval = setInterval(updateCountdown, 1000);

  function updateCountdown() {
    const currentDate = new Date().getTime();
    const remainingTime = targetDate - currentDate;

    if (remainingTime <= 0) {
      clearInterval(countdownInterval);
      targetElement.innerHTML = '<span class="text-danger">Waktu berakhir!</span>';
      return;
    }

    const hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

    const formattedTime = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
    targetElement.innerHTML = formattedTime;
  }

  // Parse the target date string in "dd/mm/yyyy H:i:s" format
  const [datePart, timePart] = targetDateStr.split(' ');
  const [day, month, year] = datePart.split('/');
  const [hour, minute, second] = timePart.split(':');

  // Create a new Date object with the parsed values
  const targetDate = new Date(year, month - 1, day, hour, minute, second).getTime();
}

