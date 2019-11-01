$("body").on("click", "#AddEducation", function(){
            var Degree_Title = $("input[name='degreetitle']").val();
            var Completion_Year = $("input[name='completionyear']").val();
            var Cand_Institue = $("input[name='cand_Institue']").val();
            var Obtained_Marksorcgpa = $("input[name='obtainedmarksorcgpa']").val();
            var Cand_Totmcgpa = $("input[name='cand_Totmcgpa']").val(); 
            var TableRow = "<tr ><td>" + Degree_Title  + "</td><td>" + Completion_Year  + "</td><td>" + Cand_Institue  + "</td><td>" + Obtained_Marksorcgpa  + "</td><td>" + Cand_Totmcgpa + "</td><td><button type='button' class='btn btn-primary btn-block deletebtn'>Delete</button></td></tr>";
            $("#AddEducationTable tbody").append(TableRow); 
            $("input[name='degreetitle']").val('');
            $("input[name='completionyear']").val('');
            $("input[name='cand_Institue']").val('');
            $("input[name='obtainedmarksorcgpa']").val('');
            $("input[name='cand_Totmcgpa']").val('');                      
        });
        $("body").on("click", ".deletebtn", function(){
            $(this).parents("tr").remove();
        });
        $("body").on("click", "#AddFamilyInfo", function(){
            var candidateid = $("input[name='candid']").val();
            var FM_Name = $("input[name='fmname']").val();
            var FM_Age = $("input[name='fmage']").val();
            var FM_Gender = $("select[name='fmgender']").val();
            var FM_Relation = $("select[name='fmrelation']").val();
            var FM_Qualification = $("input[name='fmqualification']").val(); 
            var TableRow = "<tr><td style='display:none;'>" + candidateid  + "</td><td>" + FM_Name  + "</td><td>" + FM_Age + "</td><td>" + FM_Gender  + "</td><td>" + FM_Relation + "</td><td>" + FM_Qualification   + "</td><td><button type='button' class='btn btn-primary btn-block deletebtn'>Delete</button></td></tr>";
            $("#AddFamilyInfoTable tbody").append(TableRow); 
            $("input[name='fmname']").val('');
            $("input[name='fmage']").val('');
            $("select[name='fmgender']").val('');
            $("select[name='fmrelation']").val('');
            $("input[name='fmqualification']").val('');                     
        });        
        $("body").on("click", "#AddExperience", function(){
            var Organization_Name = $("input[name='organizationname']").val();
            var Job_Title = $("input[name='jobtitle']").val();
            var Start_Date = $("input[name='startdate']").val();
            var End_Date = $("input[name='enddate']").val();
            var Total_Experience = $("input[name='totalexperience']").val(); 
            var TableRow = "<tr ><td>" + Job_Title  + "</td><td>" + Organization_Name  + "</td><td>" + Start_Date  + "</td><td>" + End_Date + "</td><td>" + Total_Experience   + "</td><td><button type='button' class='btn btn-primary btn-block deletebtn'>Delete</button></td></tr>";
            $("#AddExperienceTable tbody").append(TableRow); 
            $("input[name='organizationname']").val('');
            $("input[name='jobtitle']").val('');
            $("input[name='startdate']").val('');
            $("input[name='enddate']").val('');
            $("input[name='totalexperience']").val('');                     
        });
        $("body").on("click", "#AddDOrC", function(){
            var Diploma_Certification = $("input[name='diplomacertification']").val();
            var Duration_Months = $("input[name='durationMonths']").val();
            var Institute = $("input[name='institute']").val();
            var Date_Of_Completion = $("input[name='dateofcompletion']").val();
            var TableRow = "<tr ><td>" + Diploma_Certification + "</td><td>" + Duration_Months  + "</td><td>" + Institute + "</td><td>" + Date_Of_Completion   + "</td><td><button type='button' class='btn btn-primary btn-block deletebtn'>Delete</button></td></tr>";
            $("#AddDOrCTable tbody").append(TableRow); 
            $("input[name='diplomacertification']").val('');
            $("input[name='durationMonths']").val('');
            $("input[name='institute']").val('');
            $("input[name='dateofcompletion']").val('');  
        });
        $("body").on("click", "#AddLanguage", function(){
            var Language = $("input[name='language']").val();
            var TableRow = "<tr ><td>" + Language + "</td><td><button type='button' class='btn btn-primary btn-block deletebtn'>Delete</button></td></tr>";
            $("#AddLanguageTable tbody").append(TableRow); 
            $("input[name='language']").val(''); 
        });
        $("body").on("click", "#AddSkill", function(){
            var Skill = $("input[name='skill']").val();
            var TableRow = "<tr ><td>" + Skill + "</td><td><button type='button' class='btn btn-primary btn-block deletebtn'>Delete</button></td></tr>";
            $("#AddSkillTable tbody").append(TableRow); 
            $("input[name='language']").val(''); 
        });
        $('#convert-table').click( function() {
            var table = $('#AddFamilyInfoTable').tableToJSON({
                ignoreColumns: [5]
            });
            console.log(table);
            alert(JSON.stringify(table));  
        });
                    