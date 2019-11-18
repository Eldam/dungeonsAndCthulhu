function remplace(lambda,challenge){
    $(".attr-num").each(function( index ) {
      var data = $( this ).text();
      var dataSplit = data.split(" ");
      var atr = parseInt(dataSplit[0]);
      var mod = parseInt(dataSplit[1].substr(1).slice(0, -1));
      responseArray = lambda(atr,mod,challenge);
      var atr = responseArray[0];
      var mod = responseArray[1];
      var signe = mod > 0 ? "+" : "";
      $(this).text(atr + " (" + signe + mod + ")");
    });
  }
  
  //remplace(function(atr,mod,cha){return [atr+2,mod+3]});
  
  
  function remplaceArmor(lambda,challenge){
    var armorSplitArray = $(".body .single-list ul li:first").text().split(" ");
    var armorValue = parseInt(armorSplitArray[2]);
    armorValue = lambda(armorValue, challenge);
    armorSplitArray[2] = armorValue;
    var armorToStrin = "<span>Armor Class </span>";
    var i;
    for(i = 2; i < armorSplitArray.length; i++){
        armorToStrin += armorSplitArray[i] + " ";
    }
  
    $(".body .single-list ul li:first").html(armorToStrin);
  }
  
  function addjQuery(){
    var script = document.createElement('script');
    script.src = "https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js";
    document.getElementsByTagName('head')[0].appendChild(script);
  }
  
  /*
  fastArrayRemplace([52,54,25,25,18,20],17,488);
  remplace(testAtrExp,0);
  */
  function fastArrayRemplace(atrArrayValue, newArmorValue, newHitPointsValue){
    $(".attr-num").each(function( index ) {
      var atr = atrArrayValue[index];
      var mod = 0 ;
      var signe = ""
      if(atr < 12){
        mod = atr % 2 != 0 ? getModifierByAttribute(atr) : getModifierByAttribute(atr - 1) ;
        signe = "";
      }else {
        mod =  getModifierByAttribute(atr) ;
        signe = "+" ;
      }
      $(this).text(atr + " (" + signe + mod + ")");
    });
  
    //Remplace Armor By newArmorValue
    var armorSplitArray = $(".body .single-list ul li:first").text().split(" ");
    var armorValue = parseInt(armorSplitArray[2]);
    armorSplitArray[2] = newArmorValue;
    var armorToStrin = "<span>Armor Class </span>";
    var i;
    for(i = 2; i < armorSplitArray.length; i++){
        armorToStrin += armorSplitArray[i] + " ";
    }
  
    $(".body .single-list ul li:first").html(armorToStrin);
  
    //Remplace hitPoints By newHitPointsValue
  
    var armorToStrin = "<span>Hit Points </span> " + newHitPointsValue + " Hp";
    $(".body .single-list ul li:eq(1)").html(armorToStrin);
  
  }
  
  
  
  console.log('skillsRemplace([["Skills ","TS Des +4, TS Con +8"],\n'
  +',["Damage Vulnerabilities","Fire"]\n'
  +',["Senses","Darkvision 100 Ft., passive Perception 15"]\n'
  +',["Ki","147 Ki"]\n'
  +',["Atack Peerks","+1D6"],\n'
  +',["Damage Peerks","+1D8"],\n'
  +',["Challenge ","Level 14 (4.800 XP)"]\n'
  +']);');
  
  
  /*
  skillsRemplace([["Skills ","TS Des +4, TS Con +8"],
  ,["Damage Vulnerabilities","Fire"]
  ,["Senses","Darkvision 100 Ft., passive Perception 15"]
  ,["Ki","147 Ki"]
  ,["Atack Peerks","+1D6"],
  ,["Damage Peerks","+1D8"],
  ,["Challenge ","Level 14 (4.800 XP)"]
  ]);
  */
  function skillsRemplace(acctionsArray){
    $(".single-list:eq(1) ul").empty();
    for (action in acctionsArray){
      $(".single-list:eq(1) ul").append("<li><span>" + acctionsArray[action][0] + ": </span>" + acctionsArray[action][1] + "</li>");
    }
  }
  
  
  
  console.log('actionsRemplace([\n'
  +'["Actions","2 Actions or 1 Actions and 3 Instants."],\n'
  +'["Blood Fast Restoriation","(2 Hungry, 1 Action) Regenerates 29."]\n'
  +');');
  /*
  actionsRemplace([
  ["Actions","2 Actions or 1 Actions and 3 Instants. (He can had 1D10 extra Str and Des by Hungry)"],
  ["Blood Fast Restoriation","(2 Hungry, 1 Action) Regenerates 29 (2D20 + 2*Con). He can use all hungry tokens in the same time."],
  ["Bite","(1 Action) The action do low damage (1D6) but she can suck blood at high speed. For 1 extra accion she can sucks 1 litre of blood (She Gain 2 hungry). Doing 2D12 action. After that the victim continue bleedeng a few hours or until pass a TS Con 25"],
  ["Sword Hit"," (1 Action) He has a sutil weapon. His strike damages an 17 (1D8 + Damage perks + Hungry + Str). The Atack was 30 (1D20 + Atak Perks + Hungry + Dex)" ],
  ["Infinity Edge"," (1 Instant, 48 Ki/24 Ki Maintenance) Increase his sword's edge with Ki. The Sword damage increase to 34 (Sword + 1D12 + 1D10 + 2x Perks). Atack increase to 36 (Sword + 1D12)"],
  ["Getsuga Tenshou","(1 Action, 3 Cone Range, 40 Ki) Damage was 28 (2D10 + 2x Perks + Hungry + Str)"]
  ]);
  */
  function actionsRemplace(acctionsArray){
    $(".traits ul").empty();
    for (action in acctionsArray){
      $(".traits ul").append("<li><span>" + acctionsArray[action][0] + ": </span>" + acctionsArray[action][1] + "</li>");
    }
  }
  
  console.log('infoRemplace("Information",[\n'
  +'["Actions","2 Actions or 1 Actions and 3 Instants."],\n'
  +'["Blood Fast Restoriation","(2 Hungry, 1 Action) Regenerates 29."]\n'
  +']);');
  
  
  function infoRemplace(name,acctionsArray){
    $(".actions h2").empty();
    $(".actions h2").text(name);
    $(".actions ul").empty();
    for (action in acctionsArray){
      $(".actions ul").append("<li><span>" + acctionsArray[action][0] + ": </span>" + acctionsArray[action][1] + "</li>");
    }
  }
  
  
  console.log('nameRemplace("","");');
  
  function nameRemplace(name, description = ""){
    $(".name > h1").text(name);
    if(description != ""){
      $(".subtitle").html(description);
    }
  }
  
  
  
  
  function test(atr,mod,cha){
    if(mod>= 0){
      mod = Math.floor(mod * cha);
      return [getAttributeByModifier(mod),mod];
    }else{
      return [atr,getModifierByAttribute(atr)];
    }
  }
  
  function testExp(atr,mod,cha){
    if(mod>= 0){
      mod = Math.floor(mod * cha + cha);
      return [getAttributeByModifier(mod),mod];
    }else{
      return [atr,getModifierByAttribute(atr)];
    }
  }
  
  function testAtrLineal(atr,mod,cha){
    if(mod>= 0){
      atr = Math.floor(atr * 1.2 * cha);
    }
    return [atr,getModifierByAttribute(atr)];
  }
  
  
  //This is the best heuristic 11/7/19
  function testAtrExp(atr,mod,cha){
    if(mod>= 0){
      var i;
      for(i = 0 ; i<cha; i++){
        atr = Math.floor(atr * 1.2);
      }
    }
    return [atr,getModifierByAttribute(atr)];
  }
  
  
  function getModifierByAttribute(attribute){
      var modifier = 0;
  
      if (attribute < 12)
      {
          modifier = Math.ceil((attribute - 13) / 2) * 2;
      }
      else
      {
  
          modifier = (attribute - 12) / 2;
  
  
          if (attribute >= 24)
          {
              modifier = (attribute - 18);
              var multiplier = 1.0;
              var scalePosition = 0;
              modifier = 5.0;
  
              var i;
              for (i = 24; i <= attribute; i++)
              {
                  modifier = (modifier + multiplier);
                  scalePosition++;
                  if (scalePosition >= 12)
                  {
                      scalePosition = 0;
                      multiplier += 0.5;
                  }
              }
          }
      }
  
  
      return Math.floor(modifier);
  }
  
  
  
  
  
  function getAttributeByModifier(modifier) {
    atr = 1;
    end = false;
  
    while(!end){
      var outputValue = getModifierByAttribute(atr);
      if(outputValue >= modifier){
          return atr;
      }
  
      atr++;
  
      if(atr > 500){
          end = true;
      }
    }
  
    return -1;
  }
  
  
  function standarLambdaDnC(atr,mod,cha){
    if(atr >= 12){
      atr = Math.floor(atr + atr * cha/30);
      return [getModifierByAttribute(mod),mod];
    }else{
      return [atr,getModifierByAttribute(atr)];
    }
  }
  
  //standarRemplaceDnC([52,54,25,25,18,20],17,488,60);
  function standarRemplaceDnC(atrArrayValue, newArmorValue, newHitPointsValue,chalengeDnC = 0, chalengeDnD = 0.5){
    if(chalengeDnC == 0){
      chalengeDnC = chalengeDnD * 2;
    }
  
    for(var i=0; i< atrArrayValue.length-1;i++){
      if(atrArrayValue[i] >= 12){
        atrArrayValue[i] = Math.floor(atrArrayValue[i] + atrArrayValue[i] * chalengeDnC/30);
      }
    }
  
    var conModif = getModifierByAttribute(atrArrayValue[i]);
  
    if (newArmorValue < (10 + conModif)){
      newArmorValue = 10 + conModif;
    }
  
    stimatedHitPoints = (atrArrayValue[i] + conModif + conModif * chalengeDnC/10);
    if(newHitPointsValue < stimatedHitPoints){
      newHitPointsValue = stimatedHitPoints;
    }
  
    fastArrayRemplace(atrArrayValue, newArmorValue, newHitPointsValue);
    console.log("Patfinder Monster");
    console.log("Atack ");
  }
  
  console.log("standarRemplacePatfinderToDnC([52,54,25,25,18,20],17,488,60)");
  function standarRemplacePatfinderToDnC(atrArrayValue, newArmorValue, newHitPointsValue,chalengeDnC = 0, chalengeDnD = 0.5){
    if(chalengeDnC == 0){
      chalengeDnC = chalengeDnD * 2;
    }
  
    for(var i=0; i< atrArrayValue.length-1;i++){
      if(atrArrayValue[i] >= 12){
        atrArrayValue[i] = Math.floor(atrArrayValue[i] + atrArrayValue[i] * chalengeDnC/60);
      }
    }
  
    var conModif = getModifierByAttribute(atrArrayValue[2]);
  
    if (newArmorValue < (10 + conModif)){
      newArmorValue = 10 + conModif;
    }
  
    stimatedHitPoints = (atrArrayValue[i] + conModif + conModif * chalengeDnC/10);
    if(newHitPointsValue < stimatedHitPoints){
      newHitPointsValue = stimatedHitPoints;
    }
  
    fastArrayRemplace(atrArrayValue, newArmorValue, newHitPointsValue);
    console.log("Patfinder Monster");
    console.log("Oponents recomended: 4 members level "+ chalengeDnC);
    console.log("Atack Dice "+ (1 + chalengeDnC/10) + "x");
    var desAtr = atrArrayValue[1];
    var totalInstants = Math.floor(desAtr/8);
    var actions = 1 + Math.floor(totalInstants/3);
    var instants = totalInstants%3;
    console.log("Number of Actions: "+ actions +" action and " + instants +" instants");
  }