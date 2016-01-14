var index=(function(){
    return {
        competitionType:{
            1:"活动",
            2:"联赛"
        },
        loadCompetitions:function(){
            var me=this;
            $.ajax({
                url:common.baseUrl+"user/competitions/list",
                method:"get",
                data:{
                    limit:5,
                    stick:1,
                    offset:0
                },
                success:function(data){
                    if(data.success){
                        if(data.results.length!=0){
                            for(var i= 0,len=data.results.length;i<len;i++){
                                data.results[i].typeTxt=me.competitionType[data.results[i].type];
                            }
                        }else{
                            data.noData=true;
                        }
                        var tpl=$("#resultTpl").html();
                        var html=juicer(tpl,data);
                        $("#myList").html(html);
                    }
                },
                error:function(){

                }
            });
        }
    }
})();
$(document).ready(function(){
    index.loadCompetitions();
});