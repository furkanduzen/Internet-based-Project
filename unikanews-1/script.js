




const toggleBtn = document.querySelector(' .toggle_button')
const toggleBtnIcon = document.querySelector('.toggle_button i')
const dropDownMenu = document.querySelector('.dropdown_menu')


document.addEventListener("DOMContentLoaded", function() {
  const toggleButton = document.querySelector('.toggle_button');
  const dropdownMenu = document.querySelector('.dropdown_menu');

  toggleButton.addEventListener("click", function() {
    dropdownMenu.classList.toggle("open");
  });
});



toggleBtn.onclick = function () {
  dropDownMenu.classList.toggle('open')
  const isOpen = dropDownMenu.classList.contains('open')

  toggleBtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
}






/*

const yukarıcık = document.querySelector ('.yukarıçık');
window.addEventListener('scroll', checkHeight)
function checkHeight()
{
  if (window.scrollY > 100) {
    yukarıcık.style.display = "flex"
  }
  else{
  yukarıcık.style.display = "none"
  }
}
yukarıcık.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  })
})
*/
/*
function show (anything) {
  document.querySelector(' •textBox').value = anything;
}
let dropdown = document.querySelector ('.dropdown' ) ;
dropdown.onclick = function () {
  dropdown.classList.toggle('active');
}
*/















/* DERS NOTLARI SCRİPTİ
var facultyDepartmentCourseInfo = {
  Mühendislik: {
    Bilgisayar: ["İnternetBasedProgramming", "DatabaseSystems"],
    ElektrikElektronik: ["Electrical Engineering", "Electronics Engineering"]
  },
  Mimarlık: {
    Finance: ["Finance", "Accounting"],
    Marketing: ["Marketing", "Advertising"]
  },
  Diş: {
    Computer: ["Software Engineering", "Computer Engineering"],
    Electrical: ["Electrical Engineering", "Electronics Engineering"]
  },
  Tıp: {
    Computer: ["Software Engineering", "Computer Engineering"],
    Electrical: ["Electrical Engineering", "Electronics Engineering"]
  },
  Fen: {
    Computer: ["Software Engineering", "Computer Engineering"],
    Electrical: ["Electrical Engineering", "Electronics Engineering"]
  },
  SağlıkBilimleri: {
    Computer: ["Software Engineering", "Computer Engineering"],
    Electrical: ["Electrical Engineering", "Electronics Engineering"]
  },
  Edebiyat: {
    Computer: ["Software Engineering", "Computer Engineering"],
    Electrical: ["Electrical Engineering", "Electronics Engineering"]
  },
  Orman: {
    Computer: ["Software Engineering", "Computer Engineering"],
    Electrical: ["Electrical Engineering", "Electronics Engineering"]
  },
  Teknoloji: {
    Computer: ["Örnekders", "Computer Engineering"],
    Electrical: ["Electrical Engineering", "Electronics Engineering"]
  },
  İletişim: {
    Computer: ["Software Engineering", "Computer Engineering"],
    Electrical: ["Electrical Engineering", "Electronics Engineering"]
  },
  TeknikEğitim: {
    Computer: ["Software Engineering", "Computer Engineering"],
    Electrical: ["Electrical Engineering", "Electronics Engineering"]
  },
};

window.onload = function() {
  const selectFaculty = document.getElementById('faculty');
  const selectDepartment = document.getElementById('department');
  const selectCourse = document.getElementById('course');
  const downloadButton = document.getElementById('downloadButton');

  selectDepartment.disabled = true;
  selectCourse.disabled = true;
  downloadButton.disabled = true;

  for (let faculty in facultyDepartmentCourseInfo) {
    selectFaculty.options[selectFaculty.options.length] = new Option(faculty, faculty);
  }

  selectFaculty.onchange = function() {
    selectDepartment.disabled = false;
    selectCourse.disabled = true;
    downloadButton.disabled = true;

    selectDepartment.length = 1;
    selectCourse.length = 1;

    for (let department in facultyDepartmentCourseInfo[this.value]) {
      selectDepartment.options[selectDepartment.options.length] = new Option(department, department);
    }
  };

  selectDepartment.onchange = function() {
    selectCourse.disabled = false;
    downloadButton.disabled = true;

    selectCourse.length = 1;

    const selectedFaculty = selectFaculty.value;
    const selectedDepartment = selectDepartment.value;

    const courses = facultyDepartmentCourseInfo[selectedFaculty][selectedDepartment];

    for (let i = 0; i < courses.length; i++) {
      selectCourse.options[selectCourse.options.length] = new Option(courses[i], courses[i]);
    }
  };

  selectCourse.onchange = function() {
    downloadButton.disabled = false;
  };
  downloadButton.onclick = function() {
    const selectedFaculty = selectFaculty.value;
    const selectedDepartment = selectDepartment.value;
    const selectedCourse = selectCourse.value;


    const downloadLink = createDownloadLink(selectedFaculty, selectedDepartment, selectedCourse);


    downloadFile(downloadLink);
  };


  function createDownloadLinkForCourse1() {
    const faculty = 'Mühendislik';
    const department = 'Bilgisayar';
    const course = 'İnternetBasedProgramming';
    const filePath = `/Users/fd/Desktop/kaynaksite.zip`;
    return filePath;
  }


  function downloadFile(url) {
    const link = document.createElement('a');
    link.href = url;
    link.target = '_blank';
    link.download = 'ders-notu.zip';

    link.click();
  }


};
*/
