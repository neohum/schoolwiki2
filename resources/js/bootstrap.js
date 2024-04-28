import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


 //shcool search
    let render = document.getElementById("schoolBtn").addEventListener('click', renderSchools);
    let schoolSearch = document.getElementById('schoolSearch').value;
    let html='';
    let container = document.querySelector('#schoolsearch12');

    async function getSchools(schoolSearch) {
        let url = `https://open.neis.go.kr/hub/schoolInfo?KEY=229bf2a993084683bdb67b50e475b50c&Type=json&pIndex=1&pSize=100&SCHUL_NM=${schoolSearch}`;
        try {
        let res = await fetch(url);
            let data = await res.json();
            console.log(data);
        return await data.schoolInfo[1].row;
        } catch (error) {
        console.log(error);
        }
    }



     async function renderSchools() {
        let schoolSearch = document.querySelector('input[name="schoolSearch"]').value;
        try {
            let schools = await getSchools(schoolSearch);
            let html = '';
            schools.forEach(school => {
                let htmlSegment = `
                    <div class="mb-3">
                        <button class="btn btn-success w-100" id="selectBtn" onclick="selectSchool('${school.SCHUL_NM}', '${school.SD_SCHUL_CODE}', '${school.ATPT_OFCDC_SC_NM}')">
                            3. ${school.SCHUL_NM} ${school.SD_SCHUL_CODE} ${school.ATPT_OFCDC_SC_NM}
                        </button>

                    </div>`;

            html += htmlSegment;
            });

            let container = document.querySelector('#schoolsearch12');
            container.innerHTML = html;
        } catch (error) {
            console.log(error);
        }

    };

    async function selectSchool(schoolname, schoolcode, schoolstate) {
          alert(schoolstate + " " + schoolname + "를 선택하셨습니다. 아래 4번으로 가셔서 이메일을 입력해주세요.");
          document.getElementById("SCHUL_NM").value = schoolname;
          document.getElementById("SD_SCHUL_CODE").value = schoolcode;
          html = '';
          let container = document.querySelector('#schoolsearch12');
            container.innerHTML = html;

    }

            //checkbox
    document.getElementById("submit").disabled = true;
    function getCheck() {
      const selectedElements = document.querySelectorAll('input[class=form-check-input]:checked');
      //const selectedElements1 = document.querySelectorAll('input[class=orm-check-input]');

      console.log(selectedElements.length);
      if(selectedElements.length == 0) {
        document.getElementById("submit").disabled = true;
      } else {
        document.getElementById("submit").disabled = false;
        selectedElements.length ===1;
      }
    }
