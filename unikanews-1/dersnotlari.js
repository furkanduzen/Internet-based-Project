var facultyDepartmentCourseInfo = {
  Mühendislik: {
    Bilgisayar: ["İnternet Based Programming", "Database Systems"],
    ElektrikElektronik: ["Elektronik-1", "Electronics Engineering"]
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

    if (downloadLink) {
      downloadFile(downloadLink);
    }
  };


  function createDownloadLink(faculty, department, course) {
    if (faculty === 'Mühendislik' && department === 'Bilgisayar' && course === 'İnternet Based Programming') {
      const filePath = 'internetbasedprogramming.zip';
      return filePath;
    } else if (faculty === 'Mühendislik' && department === 'ElektrikElektronik' && course === 'Elektronik-1') {
      const filePath = '/Users/fd/Desktop/unikanews/unikanews.zip';
      return filePath;
    } else {
      return null;
    }
  }



  function downloadFile(url) {
    const link = document.createElement('a');
    link.href = 'internetbasedprogramming.zip'
    link.target = '_blank';
    link.download = url;

    link.click();
  }




};
