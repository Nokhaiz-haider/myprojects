function viewFamilyMember(){

    $.ajax({
    type: "GET",
    url: "/view/family-member"
    }).done(function( data ) {
        $('#ViewFamilyMember').html(data);
    });
}

function addFamilyMember(){
    
    var serialized = $('#family_member').find(':input').serialize();
   
    $.ajax({
        headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:"POST",
        url:"/add/family-member",
        data:serialized,
        cache:false,
        dataType:"text",
        beforeSend: function(){
            $('#AddFamilyInfoTable').css("filter", "blur(2px)");
            $('#AddFamilyInfoTable').css("-webkit-filter", "blur(2px)");
            $('#member_name').val('');
            $('#member_age').val('');
            $('#member_gender').val('');
            $('#member_relation').val('');
            $('#member_qual').val('');
        },  
        success : function(html){
            viewFamilyMember();
        },
        complete:function(data){
            $("#editmemberalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editmemberalert").slideUp(900);
            }); 
        }        
    });
}

function deleteFamilyMember(id){

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },        
        url: "/deleteFamilyMember/"+id,
        type: 'get',
        data: {
            "id": id
        },
        beforeSend: function(){
            $('#AddFamilyInfoTable').css("filter", "blur(2px)");
            $('#AddFamilyInfoTable').css("-webkit-filter", "blur(2px)");
        },        
        success: function (){
            viewFamilyMember();
        },
        complete:function(data){
            $("#editmemberalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editmemberalert").slideUp(900);
            }); 
        }
    });
}

function editFamilyMember(str){

    var id = str;
    var serialized = $('#edit_family_member'+str).find(':input').serialize();
    $.ajax({
        headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:"POST",
        url:"/edit/family-member",
        data:serialized,
        cache:false,
        dataType:"text",
        beforeSend: function(){
            $('#familymembersModal'+str).modal('hide');
            $('#AddFamilyInfoTable').css("filter", "blur(2px)");
            $('#AddFamilyInfoTable').css("-webkit-filter", "blur(2px)");
        },
        success : function(html){
            viewFamilyMember();
        },
        complete:function(data){
            $("#editmemberalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editmemberalert").slideUp(900);
            });
            
        }
    });
}

function viewEducation(){
    $.ajax({
    type: "GET",
    url: "/view/education"
    }).done(function( data ) {
        $('#ViewEducation').html(data);
    });
}

function addEducation(){

    var serialized = $('#candeducation').find(':input').serialize();
    $.ajax({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:"post",
        url:'/add/education',
        data:serialized,
        cache:false,
        dataType:"text",
        beforeSend: function(){
            $('#AddEducationTable').css("filter", "blur(2px)");
            $('#AddEducationTable').css("-webkit-filter", "blur(2px)");
            $('#degreetitle').val('');
            $('#educationstatus').val('');
            $('#completionyear').val('');
            $('#cand_Institute').val('');
            $('#obtainedmarksorcgpa').val('');
            $('#cand_Totmcgpa').val('');
        },        
        success : function(html){
            viewEducation();
        },
        complete:function(data){
            $("#editeducationalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editeducationalert").slideUp(900);
            }); 
        }        
    });
}

function deleteEducation(id){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: "/deleteEducation/"+id,
        type: 'get',
        data: {
            "id": id
        },
        beforeSend: function(){
            $('#AddEducationTable').css("filter", "blur(2px)");
            $('#AddEducationTable').css("-webkit-filter", "blur(2px)");
        },        
        success: function (){
            viewEducation();
        },
        complete:function(data){
            $("#editeducationalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editeducationalert").slideUp(900);
            }); 
        }
    });
}

function editEducation(str){

    var id = str;
    var serialized = $('#edit_education'+str).find(':input').serialize();
    $.ajax({
        headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:"POST",
        url:"/edit/education",
        data:serialized,
        cache:false,
        dataType:"text",
        beforeSend: function(){
            $('#educationModal'+str).modal('hide');
            $('#AddEducationTable').css("filter", "blur(2px)");
            $('#AddEducationTable').css("-webkit-filter", "blur(2px)");
        },
        success : function(html){
            viewEducation();
        },
        complete:function(data){
            $("#editeducationalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editeducationalert").slideUp(900);
            });
            
        }
    });
}

function viewExperience(){
    $.ajax({
    type: "GET",
    url: "/view/experience"
    }).done(function( data ) {
        $('#ViewExperience').html(data);
    });
}

function addExperience(){
        
    var serialized = $('#experience').find(':input').serialize();
    $.ajax({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:"post",
        url:'/add/experience',
        data:serialized,
        cache:false,
        dataType:"text",
        beforeSend: function(){
            $('#AddExperienceTable').css("filter", "blur(2px)");
            $('#AddExperienceTable').css("-webkit-filter", "blur(2px)");
            $('#org_name').val('');
            $('#jobtitle').val('');
            $('#currentjobstatus').val('');
            $('#startdate').val('');
            $('#end_date').val('');
            $('#total_exp').val('');
        }, 
        success : function(html){
            viewExperience();
        },
        complete:function(data){
            $("#editexperiencealert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editexperiencealert").slideUp(900);
            }); 
        }
    });
}

function deleteExperience(id){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: "/deleteExperience/"+id,
        type: 'get',
        data: {
            "id": id
        },
        beforeSend: function(){
            $('#AddExperienceTable').css("filter", "blur(2px)");
            $('#AddExperienceTable').css("-webkit-filter", "blur(2px)");
        }, 
        success : function(html){
            viewExperience();
        },
        complete:function(data){
            $("#editexperiencealert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editexperiencealert").slideUp(900);
            }); 
        }
    });
}

function editExperience(str){

    var id = str;
    var serialized = $('#edit_experience'+str).find(':input').serialize();
    $.ajax({
        headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:"POST",
        url:"/edit/experience",
        data:serialized,
        cache:false,
        dataType:"text",
        beforeSend: function(){
            $('#experienceModal'+str).modal('hide');
            $('#AddExperienceTable').css("filter", "blur(2px)");
            $('#AddExperienceTable').css("-webkit-filter", "blur(2px)");
        },
        success : function(html){
            viewExperience();
        },
        complete:function(data){
            $("#editexperiencealert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editexperiencealert").slideUp(900);
            });
            
        }
    });
}

function viewDiploma(){
    $.ajax({
    type: "GET",
    url: "/view/diploma"
    }).done(function( data ) {
        $('#ViewDiploma').html(data);
    });
}

function addDiploma(){
        
    var serialized = $('#diploma').find(':input').serialize();
    $.ajax({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:"post",
        url:'/add/diploma',
        data:serialized,
        cache:false,
        dataType:"text",
        beforeSend: function(){
            $('#AddDOrCTable').css("filter", "blur(2px)");
            $('#AddDOrCTable').css("-webkit-filter", "blur(2px)");
            $('#diploma_name').val('');
            $('#dur_months').val('');
            $('#institute').val('');
            $('#date_of_comp').val('');
        }, 
        success : function(html){
            viewDiploma();
        },
        complete:function(data){
            $("#editdiplomaalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editdiplomaalert").slideUp(900);
            }); 
        }
    });
}

function deleteDiploma(id){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: "/deleteDiploma/"+id,
        type: 'get',
        data: {
            "id": id
        },
        beforeSend: function(){
            $('#AddDOrCTable').css("filter", "blur(2px)");
            $('#AddDOrCTable').css("-webkit-filter", "blur(2px)");
        }, 
        success : function(html){
            viewDiploma();
        },
        complete:function(data){
            $("#editdiplomaalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editdiplomaalert").slideUp(900);
            }); 
        }
    });
}

function editDiploma(str){

    var id = str;
    var serialized = $('#edit_diploma'+str).find(':input').serialize();
    $.ajax({
        headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:"POST",
        url:"/edit/diploma",
        data:serialized,
        cache:false,
        dataType:"text",
        beforeSend: function(){
            $('#diplomaModal'+str).modal('hide');
            $('#AddDOrCTable').css("filter", "blur(2px)");
            $('#AddDOrCTable').css("-webkit-filter", "blur(2px)");
        },
        success : function(html){
            viewDiploma();
        },
        complete:function(data){
            $("#editdiplomaalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editdiplomaalert").slideUp(900);
            });
            
        }
    });
}

function viewLanguage(){
    $.ajax({
    type: "GET",
    url: "/view/language"
    }).done(function( data ) {
        $('#ViewLanguage').html(data);
    });
}

function addLanguage(){

    var serialized = $('#language').serialize();
    $.ajax({
        headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:"post",
        url:'/add/languages',
        data:serialized,
        cache:false,
        dataType:"text",
        beforeSend: function(){
            $('#AddLanguageTable').css("filter", "blur(2px)");
            $('#AddLanguageTable').css("-webkit-filter", "blur(2px)");
            $('#language').val('');
            $('#skill').val('');
        }, 
        success : function(html){
             viewLanguage();
        },
        complete:function(data){
            $("#editlanguageskillalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editlanguageskillalert").slideUp(900);
            }); 
        }
    });
}

function deleteLanguage(id){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: "/deleteLanguage/"+id,
        type: 'get',
        data: {
            "id": id
        },
        beforeSend: function(){
            $('#AddLanguageTable').css("filter", "blur(2px)");
            $('#AddLanguageTable').css("-webkit-filter", "blur(2px)");
        }, 
        success : function(html){
             viewLanguage();
        },
        complete:function(data){
            $("#editlanguageskillalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editlanguageskillalert").slideUp(900);
            }); 
        }
    });
}

function editLanguage(str){

    var id = str;
    var serialized = $('#edit_language'+str).find(':input').serialize();
    $.ajax({
        headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:"POST",
        url:"/edit/language",
        data:serialized,
        cache:false,
        dataType:"text",
        beforeSend: function(){
            $('#languageModal'+str).modal('hide');
            $('#AddLanguageTable').css("filter", "blur(2px)");
            $('#AddLanguageTable').css("-webkit-filter", "blur(2px)");
        },
        success : function(html){
            viewLanguage();
        },
        complete:function(data){
            $("#editlanguageskillalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editlanguageskillalert").slideUp(900);
            });
            
        }
    });
}

function viewSkill(){
    $.ajax({
    type: "GET",
    url: "/view/skill"
    }).done(function( data ) {
        $('#ViewSkill').html(data);
    });
}

function addSkill(){

    var serialized = $('#skill').serialize();
    $.ajax({
        headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:"post",
        url:'/add/skill',
        data:serialized,
        cache:false,
        dataType:"text",
        beforeSend: function(){
            $('#AddSkillTable').css("filter", "blur(2px)");
            $('#AddSkillTable').css("-webkit-filter", "blur(2px)");
            $('#language').val('');
            $('#skill').val('');
        }, 
        success : function(html){
            viewSkill();
        },
        complete:function(data){
            $("#editlanguageskillalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editlanguageskillalert").slideUp(900);
            }); 
        }
    });
}

function deleteSkill(id){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: "/deleteSkill/"+id,
        type: 'get',
        data: {
            "id": id
        },
        beforeSend: function(){
            $('#AddSkillTable').css("filter", "blur(2px)");
            $('#AddSkillTable').css("-webkit-filter", "blur(2px)");
            $('#language').val('');
            $('#skill').val('');
        }, 
        success : function(html){
            viewSkill();
        },
        complete:function(data){
            $("#editlanguageskillalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editlanguageskillalert").slideUp(900);
            }); 
        }
    });
}

function editSkill(str){

    var id = str;
    var serialized = $('#edit_skill'+str).find(':input').serialize();
    $.ajax({
        headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:"POST",
        url:"/edit/skill",
        data:serialized,
        cache:false,
        dataType:"text",
        beforeSend: function(){
            $('#skillModal'+str).modal('hide');
            $('#AddSkillTable').css("filter", "blur(2px)");
            $('#AddSkillTable').css("-webkit-filter", "blur(2px)");
        },
        success : function(html){
            viewSkill();
        },
        complete:function(data){
            $("#editlanguageskillalert").fadeTo(2000, 900).slideUp(500, function(){
                $("#editlanguageskillalert").slideUp(900);
            });
            
        }
    });
}