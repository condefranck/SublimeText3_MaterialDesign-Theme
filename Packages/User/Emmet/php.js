emmet.require('filters').add('php', function process(tree) {


    _.each(tree.children, function(node) {

        // define variable name
        if (node.name() == 'data' && node.parent == ''){
            node.start = '\\$this->request->data';
        }else{
            node.start = (node.parent == '' ? '\\$' : '') + node.name();
        }


        // define object keys
        var className = node.attribute('class');
        if (className) {
            node.start += className
                .split(' ')
                .map(function(c) {return "['" + c + "']";})
                .join('');
        }

        node.start += node.children.length == 0 ? '' : '->';
        node.end = '';
        process(node);
    });


    return tree;

});