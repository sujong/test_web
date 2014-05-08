<script type="text/javascript" src="/se2/js/HuskyEZCreator.js" charset="utf-8"></script>
<div style="background:#ffffff">
	
	<form action="/index.php/board/write" method="post">
		<table width="100%">
			<tr>
				<td>
					작성자 
				</td>
				<td>
					<input type="text" id="NAME" name="NAME" size="94"><br/>
				</td>
			</tr>
			<tr>
				<td>
					제목 
				</td>
				<td>
					<input type="text" id="SUBJECT" name="SUBJECT" size="94"><br/>
				</td>
			</tr>
			<tr>
				<td>
					내용
				</td>
				<td>
					<textarea name="CONTENTS" id="CONTENTS" rows="10" cols="100" style="background:#ffffff; width:766px; height:412px; display:block;"></textarea>
		
				</td>
			</tr>
			
		</table>
		
		
		<!--textarea name="CONTENTS" id="CONTENTS" rows="10" cols="100" style="width:100%; height:412px; min-width:610px; display:none;"></textarea-->
			<input type="button" onclick="submitContents(this);" value="서버로 내용 전송" />
	</form>
</div>


<script type="text/javascript">
var oEditors = [];

// 추가 글꼴 목록
//var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

nhn.husky.EZCreator.createInIFrame({
	oAppRef: oEditors,
	elPlaceHolder: "CONTENTS",
	sSkinURI: "/se2/SmartEditor2Skin.html",	
	htParams : {
		bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
		bUseVerticalResizer : true,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
		bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
		//aAdditionalFontList : aAdditionalFontSet,		// 추가 글꼴 목록
		fOnBeforeUnload : function(){
			//alert("완료!");
		}
	}, //boolean
	fOnAppLoad : function(){
		//예제 코드
		//oEditors.getById["CONTENTS"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
	},
	fCreator: "createSEditor2"
});

	
function submitContents(elClickedObj) {
	oEditors.getById["CONTENTS"].exec("UPDATE_CONTENTS_FIELD", []);	// 에디터의 내용이 textarea에 적용됩니다.
	
	// 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("CONTENTS").value를 이용해서 처리하면 됩니다.
	
	try {
		elClickedObj.form.submit();
	} catch(e) {}
}

</script>

</body>
</html>