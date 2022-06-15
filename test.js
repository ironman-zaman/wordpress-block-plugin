wp.blocks.registerBlockType("ourplugin/aktars-multiple-choice-block",{
    title: 'Aktars Multiple Choice',
    icon: 'smiley',
    category: 'widgets',
    edit: function(){
        return wp.element.createElement('h3',null,'Hello this is from admin editor screen');
    } ,
    save: function(){
        return wp.element.createElement('h3',null,'Hello this is from frontend');
    }
})