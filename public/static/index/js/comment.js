$.fn.extend({  
   common:function(pageid,team_id,type){
       var datahtml = '';
	   if(type==''){
		    var action='comment';
	   }else{
		    var action='commentcate';
	   }
       $.post("/ajax/ajaxfront.php?action="+action+"",
        { 
        pageid : pageid,
        team_id : team_id,
		type:type,
        }
        , function(data){
            if(data['result']==1)
            {
               $("#curpage").val(pageid);
               $.each(data['data'], function(i, item){    
               datahtml = datahtml + 
               '<div class="user"><span class="uname">'+item['username']+'</span><span class="time">'+item['add_time']+'</span></div>'+
               '<div class="cb"></div>'+
               '<div class="comment">'+item['content']+'</div>';
               if(item['reply']!=null && item['reply_time']!=null)
               {
               datahtml = datahtml + 
			    ' <div class="reply_t">'+
               ' '+item['reply_time']+
               '</div>'+
               '<div class="reply_c">'+
               ''+item['reply']+
               ' </div>';
               }
               datahtml = datahtml + '<div class="cb bmt"></div>'; 
               }); 
               $("#inner_cmt_box").html(datahtml); 
            }
            else
            {
                
            }
        },'json');
   },
   firstbtn:function(team_id,totalpage,type){
       //更改标识为1
       $.fn.common(1,team_id,type);
       $('.pager').children('span').removeClass("po de");
       $('#last,#next').addClass("po");
       $('#first,#prev').addClass("de");
   },
   prevbtn:function(team_id,totalpage,type){
       var pageid = parseInt($("#curpage").val())-1;
       pageid = (pageid<=0)?1:pageid;
       $.fn.common(pageid,team_id,type);
       if(pageid==1)
       {
          $('.pager').children('span').removeClass("po de");
          $('#first,#prev').addClass("de"); 
          $('#last,#next').addClass("po"); 
       }else{
          $('.pager').children('span').removeClass("po de");
          $('.pager').children('span').addClass("po"); 
       }      
   },
   nextbtn:function(team_id,totalpage,type){
       var pageid = parseInt($("#curpage").val())+1;
       pageid = (pageid>=totalpage)?totalpage:pageid;
       $.fn.common(pageid,team_id,type);
       if(pageid==totalpage)
       {
          $('.pager').children('span').removeClass("po de");
          $('#last,#next').addClass("de"); 
          $('#first,#prev').addClass("po"); 
       }else{
          $('.pager').children('span').removeClass("po de");
          $('.pager').children('span').addClass("po"); 
       }     
   },
   lastbtn:function(team_id,totalpage,type){
       this.common(totalpage,team_id,type);
       $('.pager').children('span').removeClass("po de");
       $('#last,#next').addClass("de");
       $('#first,#prev').addClass("po");         
   }
});
/***评价分页面处理***/
   $("#last").on("click",function(){
      $.fn.lastbtn(team_id,totalpage,type);
   });
   $("#next").on("click",function(){
      $.fn.nextbtn(team_id,totalpage,type); 
   });
   $("#prev").on("click",function(){
       $.fn.prevbtn(team_id,totalpage,type); 
   });
   $("#first").on("click",function(){
       $.fn.firstbtn(team_id,totalpage,type); 
   });
/***************/