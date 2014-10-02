var user = prompt("A man with a large hammer challenges you to a fight.  Do you FIGHT, RUN, or TAUNT?").toUpperCase();
switch(user) {
    case 'FIGHT':
        var good = prompt("Are you good at fighting?  YES or NO)").toUpperCase();
        var strong = prompt("Are you reasonably strong?  YES or NO)").toUpperCase();
        if(good === 'YES' || strong === 'YES') {
            console.log("You pick up a stick and take him down with a firm blow to the head. Well done!");
        }
        else {
            console.log("The man smashes his hammer on your head as you stand meekly.  Well done!")
        }
        break;
    case 'RUN':
        var fast = prompt("Are you reasonably fast?  YES or NO)").toUpperCase();
        var dodge = prompt("Can you dodge things well?  YES or NO)").toUpperCase();
        if(fast === 'YES' && dodge === 'YES') {
            console.log("You quickly run the other way.  The man throws his hammer at you, but you nimbly dodge.  Well done!");
        }
        else {
            console.log("You try to run away, but the man throws his hammer straight at your head and cracks it open.  Your brain spills out onto the ground below.  Well done!");
        }
        break;
    case 'TAUNT':
        var witty = prompt("Are you reasonably witty?  YES or NO)").toUpperCase();
        var intimidating = prompt("Can you intimidate people with words?  YES or NO)").toUpperCase();
        if (witty === 'YES' && intimidating === 'YES') {
            console.log("You slice the man to ribbons with your sharp tongue.  He leaves in disgrace.  Well done!");
        }
        else {
            console.log("Your words only make the man more angry, and he brings his hammer down upon your head, acquainting your cranial contents with the ground.  Well done!");
        }
        break;
        default:
            console.log("Gotta pick one of the choices, bro.");
}
        