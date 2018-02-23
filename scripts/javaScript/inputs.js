let form = document.querySelector('.form');
            let textInputs = form.querySelectorAll('input, textarea')
            let tabs = document.querySelectorAll('.tab a');
            
            function highlight(e){
                let selected = e.srcElement;
                let label = selected.previousElementSibling;
                
                if (e.type === 'keyup') {
                        if (selected.value === '') {
                            label.classList.remove('active');
                            label.classList.remove('hightlight'); 
                    } else {
                      label.classList.add('active');
                        label.classList.add('highlight');
                    }
                } else if (e.type === 'blur') {
                    if( selected.value === '' ) {
                        label.classList.remove('active');
                        label.classList.remove('hightlight'); 
                        } else {
                        label.classList.remove('highlight');   
                        }   
                } else if (e.type === 'focus') {

                  if( selected.value === '' ) {
                        label.classList.remove('highlight'); 
                        } 
                  else if( selected.value !== '' ) {
                        label.classList.add('highlight');
                        }
                }
            }
            
            
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function(e){
                    e.preventDefault();
                    let selected = e.target;
                    let children = selected.parentElement.parentElement.children;
                    let target = selected.hash;
                    
                    
                    children[0].classList.remove('active');
                    children[1].classList.remove('active');
                    selected.parentElement.classList.add('active');
                    
                    if (target === "#signup"){
                        document.querySelector('#login').style.opacity = 0;
                        document.querySelector('#login').style.zIndex = 0;
                        setTimeout(function(){
                            document.querySelector(target).style.opacity = 1;
                            document.querySelector(target).style.zIndex = 1;
                        }, 500);
                    } else if (target === "#login"){
                        document.querySelector('#signup').style.opacity = 0;
                        document.querySelector('#signup').style.zIndex = 0;
                        setTimeout(function(){
                            document.querySelector(target).style.opacity = 1;
                            document.querySelector(target).style.zIndex = 1;
                        }, 500);
                    }
                    
                    console.log(target);
                    
                })
            })
            
            
            textInputs.forEach(input => {
                input.addEventListener('keyup', highlight);
                input.addEventListener('blur', highlight);
                input.addEventListener('focus', highlight);
            })
            