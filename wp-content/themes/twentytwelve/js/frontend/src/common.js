var common=(function(){
    return {
        baseUrl:"http://www.shizs.com/app/",
        checkLogin:function(){
            var me=this;
            $.ajax({
                url:me.baseUrl+"user/accounts/who-am-i",
                method:"get",
                success:function(data){
                    if(data.success){
                        $("#profile").attr("src",data.user.user_profile);
                        $("#name").text(data.user.fullname);
                        //$("#messageCount").text(data.user.messageCount);
                        $("#userMenu a").attr("href",function(index,value){
                            return value.replace("${userId}",data.user.id);
                        });
                        $("#userInfo").removeClass("hidden");
                        $("#loginMenu").addClass("hidden");
                    }
                }
            });
        }
    }
})();
$(document).ready(function(){
    common.checkLogin();
});
