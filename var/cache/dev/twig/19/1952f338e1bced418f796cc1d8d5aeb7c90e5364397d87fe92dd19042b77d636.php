<?php

/* message/new.html.twig */
class __TwigTemplate_ecba2897efe5771130866430dd33dc6301760a02cca4ec2c8c1a9098249b5599 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "message/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_703fda75282776ec2d7e882ce2b5d379dc49a38bbe00d0be9d725ddb206f8d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703fda75282776ec2d7e882ce2b5d379dc49a38bbe00d0be9d725ddb206f8d00->enter($__internal_703fda75282776ec2d7e882ce2b5d379dc49a38bbe00d0be9d725ddb206f8d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/new.html.twig"));

        $__internal_4e0c772df5e6bb04b1303cde1f3fcb56fb3a26588c5238701d04870e59602dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0c772df5e6bb04b1303cde1f3fcb56fb3a26588c5238701d04870e59602dd7->enter($__internal_4e0c772df5e6bb04b1303cde1f3fcb56fb3a26588c5238701d04870e59602dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_703fda75282776ec2d7e882ce2b5d379dc49a38bbe00d0be9d725ddb206f8d00->leave($__internal_703fda75282776ec2d7e882ce2b5d379dc49a38bbe00d0be9d725ddb206f8d00_prof);

        
        $__internal_4e0c772df5e6bb04b1303cde1f3fcb56fb3a26588c5238701d04870e59602dd7->leave($__internal_4e0c772df5e6bb04b1303cde1f3fcb56fb3a26588c5238701d04870e59602dd7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25bf12e1e677f752e9d96296b3a63d38dd12c4e4855badf792c2360b7b2a2c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25bf12e1e677f752e9d96296b3a63d38dd12c4e4855badf792c2360b7b2a2c34->enter($__internal_25bf12e1e677f752e9d96296b3a63d38dd12c4e4855badf792c2360b7b2a2c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ef8844c7ec15d0f538404e6ff11b2967892571cab5037a59fc4da4082db1446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef8844c7ec15d0f538404e6ff11b2967892571cab5037a59fc4da4082db1446->enter($__internal_7ef8844c7ec15d0f538404e6ff11b2967892571cab5037a59fc4da4082db1446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
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
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_inbox");
        echo "\" class=\"list-group-item\"><span class=\"fa fa-inbox\"></span> Inbox <span class=\"badge badge-success\">";
        echo twig_escape_filter($this->env, ($context["newMessages"] ?? $this->getContext($context, "newMessages")), "html", null, true);
        echo "</span></a>
                                <!-- <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-star\"></span> Starred <span class=\"badge badge-warning\">6</span></a> -->
                                <a href=\"";
        // line 27
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
        // line 48
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
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipient"] ?? $this->getContext($context, "recipient")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipient"] ?? $this->getContext($context, "recipient")), "prenom", array()), "html", null, true);
        echo "\" data-placeholder=\"add email\"/>                                
                                </div>
                                <div class=\"col-md-9\">                                        
                                    <input name=\"recipient\" type=\"hidden\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipient"] ?? $this->getContext($context, "recipient")), "id", array()), "html", null, true);
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
        
        $__internal_7ef8844c7ec15d0f538404e6ff11b2967892571cab5037a59fc4da4082db1446->leave($__internal_7ef8844c7ec15d0f538404e6ff11b2967892571cab5037a59fc4da4082db1446_prof);

        
        $__internal_25bf12e1e677f752e9d96296b3a63d38dd12c4e4855badf792c2360b7b2a2c34->leave($__internal_25bf12e1e677f752e9d96296b3a63d38dd12c4e4855badf792c2360b7b2a2c34_prof);

    }

    // line 151
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d9e07eabcf406f93b7b0ca2d7b4db40b67a6097c8280a69579bac26e7979e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9e07eabcf406f93b7b0ca2d7b4db40b67a6097c8280a69579bac26e7979e07->enter($__internal_6d9e07eabcf406f93b7b0ca2d7b4db40b67a6097c8280a69579bac26e7979e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a9d6618868c7af1ea20f83a735361af372292b421119ae65e9358d70dc4ab3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d6618868c7af1ea20f83a735361af372292b421119ae65e9358d70dc4ab3ba->enter($__internal_a9d6618868c7af1ea20f83a735361af372292b421119ae65e9358d70dc4ab3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
        echo "    <script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/summernote/summernote.js"), "html", null, true);
        echo "\"></script>  
    <script type='text/javascript' src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>          

";
        
        $__internal_a9d6618868c7af1ea20f83a735361af372292b421119ae65e9358d70dc4ab3ba->leave($__internal_a9d6618868c7af1ea20f83a735361af372292b421119ae65e9358d70dc4ab3ba_prof);

        
        $__internal_6d9e07eabcf406f93b7b0ca2d7b4db40b67a6097c8280a69579bac26e7979e07->leave($__internal_6d9e07eabcf406f93b7b0ca2d7b4db40b67a6097c8280a69579bac26e7979e07_prof);

    }

    public function getTemplateName()
    {
        return "message/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 155,  241 => 154,  237 => 153,  232 => 152,  223 => 151,  138 => 74,  130 => 71,  104 => 48,  80 => 27,  73 => 25,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

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

{% endblock %}", "message/new.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/message/new.html.twig");
    }
}
