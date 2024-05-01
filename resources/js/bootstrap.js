import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';



    //shcool search
    let render = document.getElementById("schoolBtn").addEventListener('click', renderSchools);
    let schoolSearch = document.getElementById('schoolSearch').value;


    async function getSchools(schoolSearch) {
        let url = `https://open.neis.go.kr/hub/schoolInfo?KEY=229bf2a993084683bdb67b50e475b50c&Type=json&pIndex=1&pSize=100&SCHUL_NM=${schoolSearch}`;
        try {
        let res = await fetch(url);
        let data = await res.json()
        return await data.schoolInfo[1].row;
        } catch (error) {
        console.log(error);
        }
    }

    function selectSchool(schoolname, schoolcode) {
        document.getElementById("SCHUL_NM").value.context = schoolname;
        document.getElementById("SD_SCHUL_CODE").value.context = schoolcode;
    }

    async function renderSchools() {
        let schoolSearch = document.querySelector('input[name="schoolSearch"]').value;
        try {
            let schools = await getSchools(schoolSearch);
            let html = '';
            schools.forEach(school => {

                let htmlSegment = `
                    <div class="mb-3">
                        <button class="btn btn-success w-100" id="selectBtn" onclick="javascripts:
                        document.getElementById('name').value = '${school.SCHUL_NM}',
                        document.getElementById('code').value ='${school.SD_SCHUL_CODE}'">
                            2. ${school.SCHUL_NM} ${school.SD_SCHUL_CODE} ${school.ATPT_OFCDC_SC_NM}
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


