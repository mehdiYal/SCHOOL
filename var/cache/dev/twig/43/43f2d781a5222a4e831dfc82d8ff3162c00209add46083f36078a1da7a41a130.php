<?php

/* :message:new.html.twig */
class __TwigTemplate_18f80e64773fcff25715fc3b75ca12c85c44120f282f1f1bc2ad762357311f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(((twig_in_filter("ROLE_PARENT", $this->getAttribute($this->getAttribute(        // line 1
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) ? ("baseParent.html.twig") : ("base2.html.twig")), ":message:new.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5235f960762ae10fa4dab6a62b6bedbeab5c076d794a988e468efbdb052a25cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5235f960762ae10fa4dab6a62b6bedbeab5c076d794a988e468efbdb052a25cb->enter($__internal_5235f960762ae10fa4dab6a62b6bedbeab5c076d794a988e468efbdb052a25cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:new.html.twig"));

        $__internal_da19538fbef518af918a22bf45d2a3756c49f3f9ab426c3d50899a23b7110f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da19538fbef518af918a22bf45d2a3756c49f3f9ab426c3d50899a23b7110f10->enter($__internal_da19538fbef518af918a22bf45d2a3756c49f3f9ab426c3d50899a23b7110f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:new.html.twig"));

        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5235f960762ae10fa4dab6a62b6bedbeab5c076d794a988e468efbdb052a25cb->leave($__internal_5235f960762ae10fa4dab6a62b6bedbeab5c076d794a988e468efbdb052a25cb_prof);

        
        $__internal_da19538fbef518af918a22bf45d2a3756c49f3f9ab426c3d50899a23b7110f10->leave($__internal_da19538fbef518af918a22bf45d2a3756c49f3f9ab426c3d50899a23b7110f10_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_84bbe88b5c9d93a228f0edc234643b68e155c1d22dff651f33b4532951e9b545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bbe88b5c9d93a228f0edc234643b68e155c1d22dff651f33b4532951e9b545->enter($__internal_84bbe88b5c9d93a228f0edc234643b68e155c1d22dff651f33b4532951e9b545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e99a8d6e7dc2b01547c66add5f093a306f6cbbd0eb6d2b66f315ed30792ac4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e99a8d6e7dc2b01547c66add5f093a306f6cbbd0eb6d2b66f315ed30792ac4d->enter($__internal_9e99a8d6e7dc2b01547c66add5f093a306f6cbbd0eb6d2b66f315ed30792ac4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
 <!-- START CONTENT FRAME -->
                <div class=\"content-frame\">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class=\"content-frame-top\">
                        <div class=\"page-title\">                   
                            <h2><span class=\"fa fa-pencil\"></span> Compose</h2>
                        </div>                         
                        
                        <div class=\"pull-right\">                                                                                    
                            <button class=\"btn btn-default\"><span class=\"fa fa-cogs\"></span> Settings</button>
                            <button class=\"btn btn-default\"><span class=\"fa fa-floppy-o\"></span> Save</button>
                            <button class=\"btn btn-default content-frame-left-toggle\"><span class=\"fa fa-bars\"></span></button>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class=\"content-frame-left\">
                        <div class=\"block\">
                            <div class=\"list-group border-bottom\">
                                <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_inbox");
        echo "\" class=\"list-group-item\"><span class=\"fa fa-inbox\"></span> Inbox <span class=\"badge badge-success\">";
        echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
        echo "</span></a>
                                <!-- <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-star\"></span> Starred <span class=\"badge badge-warning\">6</span></a> -->
                                <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_sentbox");
        echo "\" class=\"list-group-item\"><span class=\"fa fa-rocket\"></span> Sent</a>
                                <!-- <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-flag\"></span> Flagged</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-trash-o\"></span> Deleted <span class=\"badge badge-default\">1.4k</span></a> -->                            
                            </div>                        
                        </div>
                        <div class=\"block\">
                            <h4>Labels</h4>
                            <div class=\"list-group list-group-simple\">                                
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-success\"></span> Clients</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-warning\"></span> Social</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-danger\"></span> Work</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-info\"></span> Family</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-primary\"></span> Friends</a>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class=\"content-frame-body\">
                        <div class=\"block\">
                        <form role=\"form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_send");
        echo "\">
                            <div class=\"form-group\">
                                <div class=\"col-md-12\">
                                    <div class=\"pull-left\">
                                        <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span> Delete Draft</button>
                                    </div>
                                    <div class=\"pull-right\">
                                        <button class=\"btn btn-danger\"><span class=\"fa fa-envelope\"></span> Send Message</button>
                                    </div>                                    
                                </div>
                            </div>
                            <!-- <div class=\"form-group\">
                                <label class=\"col-md-2 control-label\">From:</label>
                                <div class=\"col-md-10\">                                        
                                    <select class=\"form-control select\">
                                        <option>Dmitry (dmitryivaniuk@domain.com)</option>
                                        <option>Incognito (otheremail@domain.com)</option>                                        
                                    </select>
                                </div>
                            </div>      -->                   
                            <div class=\"form-group\">
                                <label class=\"col-md-2 control-label\">To:</label>
                                <div class=\"col-md-9\">                                        
                                    <input name=\"\" type=\"text\" disabled=\"\" class=\"form-control\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipient"]) ? $context["recipient"] : $this->getContext($context, "recipient")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipient"]) ? $context["recipient"] : $this->getContext($context, "recipient")), "prenom", array()), "html", null, true);
        echo "\" data-placeholder=\"add email\"/>                                
                                </div>
                                <div class=\"col-md-9\">                                        
                                    <input name=\"recipient\" type=\"hidden\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipient"]) ? $context["recipient"] : $this->getContext($context, "recipient")), "id", array()), "html", null, true);
        echo "\" data-placeholder=\"add email\"/>                                
                                </div>
                               <!--  <div class=\"col-md-1\">
                                    <button class=\"btn btn-link toggle\" data-toggle=\"mail-cc\">Cc</button>
                                </div> -->
                            </div>
                            <div class=\"form-group hidden\" id=\"mail-cc\">
                                <label class=\"col-md-2 control-label\">Cc:</label>
                                <div class=\"col-md-10\">                                        
                                <input type=\"text\" class=\"tagsinput\" value=\"\" data-placeholder=\"add email\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-md-2 control-label\">Subject:</label>
                                <div class=\"col-md-10\">                                        
                                    <input name=\"subject\" type=\"text\" class=\"form-control\" value=\"\"/>                                
                                </div>                                
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-md-2 control-label\">Attachments:</label>
                                <div class=\"col-md-10\">                                        
                                    <input name=\"file\" type=\"file\" class=\"file\" data-filename-placement=\"inside\"/>
                                </div>                                
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-12\">                            
                                    <textarea  name=\"msg\" class=\"summernote_email\">                                     
                                    </textarea>                            
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-12\">
                                    <div class=\"pull-left\">
                                        <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span> Delete Draft</button>
                                    </div>
                                    <div class=\"pull-right\">
                                        <button class=\"btn btn-danger\"><span class=\"fa fa-envelope\"></span> Send Message</button>
                                    </div>                                    
                                </div>
                            </div>
                        </form>
                        </div>
                        
                    </div>
                    <!-- END CONTENT FRAME BODY -->
                </div>
                <!-- END CONTENT FRAME -->                
                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"mb-signout\">
            <div class=\"mb-container\">
                <div class=\"mb-middle\">
                    <div class=\"mb-title\"><span class=\"fa fa-sign-out\"></span> Log <strong>Out</strong> ?</div>
                    <div class=\"mb-content\">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class=\"mb-footer\">
                        <div class=\"pull-right\">
                            <a href=\"pages-login.html\" class=\"btn btn-success btn-lg\">Yes</a>
                            <button class=\"btn btn-default btn-lg mb-control-close\">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->


";
        
        $__internal_9e99a8d6e7dc2b01547c66add5f093a306f6cbbd0eb6d2b66f315ed30792ac4d->leave($__internal_9e99a8d6e7dc2b01547c66add5f093a306f6cbbd0eb6d2b66f315ed30792ac4d_prof);

        
        $__internal_84bbe88b5c9d93a228f0edc234643b68e155c1d22dff651f33b4532951e9b545->leave($__internal_84bbe88b5c9d93a228f0edc234643b68e155c1d22dff651f33b4532951e9b545_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8ebfefeede27cf81bb13f0fd016613f30f3c8cf28e791ef5625a15994e7719ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebfefeede27cf81bb13f0fd016613f30f3c8cf28e791ef5625a15994e7719ff->enter($__internal_8ebfefeede27cf81bb13f0fd016613f30f3c8cf28e791ef5625a15994e7719ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8c2c62927d0ae5ba42922cc3773b1fada8a979160b69a01798f8a81cdbfa68fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2c62927d0ae5ba42922cc3773b1fada8a979160b69a01798f8a81cdbfa68fa->enter($__internal_8c2c62927d0ae5ba42922cc3773b1fada8a979160b69a01798f8a81cdbfa68fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 154
        echo "    <script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/summernote/summernote.js"), "html", null, true);
        echo "\"></script>  
    <script type='text/javascript' src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>  
    <script>
        \$('.active').removeClass('active');
        \$('.msg').addClass('active');
    </script>        

";
        
        $__internal_8c2c62927d0ae5ba42922cc3773b1fada8a979160b69a01798f8a81cdbfa68fa->leave($__internal_8c2c62927d0ae5ba42922cc3773b1fada8a979160b69a01798f8a81cdbfa68fa_prof);

        
        $__internal_8ebfefeede27cf81bb13f0fd016613f30f3c8cf28e791ef5625a15994e7719ff->leave($__internal_8ebfefeede27cf81bb13f0fd016613f30f3c8cf28e791ef5625a15994e7719ff_prof);

    }

    public function getTemplateName()
    {
        return ":message:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 157,  242 => 156,  238 => 155,  233 => 154,  224 => 153,  139 => 76,  131 => 73,  105 => 50,  81 => 29,  74 => 27,  51 => 6,  42 => 5,  32 => 3,  20 => 1,  19 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'ROLE_PARENT' in app.user.roles 
    ? 'baseParent.html.twig' 
    : 'base2.html.twig' %}

{% block body %}

 <!-- START CONTENT FRAME -->
                <div class=\"content-frame\">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class=\"content-frame-top\">
                        <div class=\"page-title\">                   
                            <h2><span class=\"fa fa-pencil\"></span> Compose</h2>
                        </div>                         
                        
                        <div class=\"pull-right\">                                                                                    
                            <button class=\"btn btn-default\"><span class=\"fa fa-cogs\"></span> Settings</button>
                            <button class=\"btn btn-default\"><span class=\"fa fa-floppy-o\"></span> Save</button>
                            <button class=\"btn btn-default content-frame-left-toggle\"><span class=\"fa fa-bars\"></span></button>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class=\"content-frame-left\">
                        <div class=\"block\">
                            <div class=\"list-group border-bottom\">
                                <a href=\"{{ path('message_inbox')}}\" class=\"list-group-item\"><span class=\"fa fa-inbox\"></span> Inbox <span class=\"badge badge-success\">{{newMessages}}</span></a>
                                <!-- <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-star\"></span> Starred <span class=\"badge badge-warning\">6</span></a> -->
                                <a href=\"{{ path('message_sentbox')}}\" class=\"list-group-item\"><span class=\"fa fa-rocket\"></span> Sent</a>
                                <!-- <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-flag\"></span> Flagged</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-trash-o\"></span> Deleted <span class=\"badge badge-default\">1.4k</span></a> -->                            
                            </div>                        
                        </div>
                        <div class=\"block\">
                            <h4>Labels</h4>
                            <div class=\"list-group list-group-simple\">                                
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-success\"></span> Clients</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-warning\"></span> Social</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-danger\"></span> Work</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-info\"></span> Family</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-circle text-primary\"></span> Friends</a>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class=\"content-frame-body\">
                        <div class=\"block\">
                        <form role=\"form\" class=\"form-horizontal\" method=\"post\" action=\"{{ path('message_send') }}\">
                            <div class=\"form-group\">
                                <div class=\"col-md-12\">
                                    <div class=\"pull-left\">
                                        <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span> Delete Draft</button>
                                    </div>
                                    <div class=\"pull-right\">
                                        <button class=\"btn btn-danger\"><span class=\"fa fa-envelope\"></span> Send Message</button>
                                    </div>                                    
                                </div>
                            </div>
                            <!-- <div class=\"form-group\">
                                <label class=\"col-md-2 control-label\">From:</label>
                                <div class=\"col-md-10\">                                        
                                    <select class=\"form-control select\">
                                        <option>Dmitry (dmitryivaniuk@domain.com)</option>
                                        <option>Incognito (otheremail@domain.com)</option>                                        
                                    </select>
                                </div>
                            </div>      -->                   
                            <div class=\"form-group\">
                                <label class=\"col-md-2 control-label\">To:</label>
                                <div class=\"col-md-9\">                                        
                                    <input name=\"\" type=\"text\" disabled=\"\" class=\"form-control\" value=\"{{recipient.nom}} {{recipient.prenom}}\" data-placeholder=\"add email\"/>                                
                                </div>
                                <div class=\"col-md-9\">                                        
                                    <input name=\"recipient\" type=\"hidden\" value=\"{{recipient.id}}\" data-placeholder=\"add email\"/>                                
                                </div>
                               <!--  <div class=\"col-md-1\">
                                    <button class=\"btn btn-link toggle\" data-toggle=\"mail-cc\">Cc</button>
                                </div> -->
                            </div>
                            <div class=\"form-group hidden\" id=\"mail-cc\">
                                <label class=\"col-md-2 control-label\">Cc:</label>
                                <div class=\"col-md-10\">                                        
                                <input type=\"text\" class=\"tagsinput\" value=\"\" data-placeholder=\"add email\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-md-2 control-label\">Subject:</label>
                                <div class=\"col-md-10\">                                        
                                    <input name=\"subject\" type=\"text\" class=\"form-control\" value=\"\"/>                                
                                </div>                                
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-md-2 control-label\">Attachments:</label>
                                <div class=\"col-md-10\">                                        
                                    <input name=\"file\" type=\"file\" class=\"file\" data-filename-placement=\"inside\"/>
                                </div>                                
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-12\">                            
                                    <textarea  name=\"msg\" class=\"summernote_email\">                                     
                                    </textarea>                            
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-md-12\">
                                    <div class=\"pull-left\">
                                        <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span> Delete Draft</button>
                                    </div>
                                    <div class=\"pull-right\">
                                        <button class=\"btn btn-danger\"><span class=\"fa fa-envelope\"></span> Send Message</button>
                                    </div>                                    
                                </div>
                            </div>
                        </form>
                        </div>
                        
                    </div>
                    <!-- END CONTENT FRAME BODY -->
                </div>
                <!-- END CONTENT FRAME -->                
                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class=\"message-box animated fadeIn\" data-sound=\"alert\" id=\"mb-signout\">
            <div class=\"mb-container\">
                <div class=\"mb-middle\">
                    <div class=\"mb-title\"><span class=\"fa fa-sign-out\"></span> Log <strong>Out</strong> ?</div>
                    <div class=\"mb-content\">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class=\"mb-footer\">
                        <div class=\"pull-right\">
                            <a href=\"pages-login.html\" class=\"btn btn-success btn-lg\">Yes</a>
                            <button class=\"btn btn-default btn-lg mb-control-close\">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->


{% endblock %}


{% block javascripts %}
    <script type='text/javascript' src=\"{{ asset('js/plugins/summernote/summernote.js') }}\"></script>  
    <script type='text/javascript' src=\"{{ asset('js/plugins/tagsinput/jquery.tagsinput.min.js') }}\"></script> 
    <script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-select.js') }}\"></script> 
    <script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-file-input.js') }}\"></script>  
    <script>
        \$('.active').removeClass('active');
        \$('.msg').addClass('active');
    </script>        

{% endblock %}", ":message:new.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/message/new.html.twig");
    }
}
