<?php

/* message/new.html.twig */
class __TwigTemplate_ecba2897efe5771130866430dd33dc6301760a02cca4ec2c8c1a9098249b5599 extends Twig_Template
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
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()))) ? ("baseParent.html.twig") : ("base2.html.twig")), "message/new.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47fca8d0bb279ee17d8e374d18db749b73c7e4c12a10b83bc00737464e8edfe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47fca8d0bb279ee17d8e374d18db749b73c7e4c12a10b83bc00737464e8edfe1->enter($__internal_47fca8d0bb279ee17d8e374d18db749b73c7e4c12a10b83bc00737464e8edfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/new.html.twig"));

        $__internal_0d3d0d47cbad0c45ee834eb9e744a9bdb224925f6647d1103723e226c37770ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3d0d47cbad0c45ee834eb9e744a9bdb224925f6647d1103723e226c37770ef->enter($__internal_0d3d0d47cbad0c45ee834eb9e744a9bdb224925f6647d1103723e226c37770ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/new.html.twig"));

        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47fca8d0bb279ee17d8e374d18db749b73c7e4c12a10b83bc00737464e8edfe1->leave($__internal_47fca8d0bb279ee17d8e374d18db749b73c7e4c12a10b83bc00737464e8edfe1_prof);

        
        $__internal_0d3d0d47cbad0c45ee834eb9e744a9bdb224925f6647d1103723e226c37770ef->leave($__internal_0d3d0d47cbad0c45ee834eb9e744a9bdb224925f6647d1103723e226c37770ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6d038708239a39784c0c6d600330fd60f7731d5332c5e60ce0a9ce7827fe4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d038708239a39784c0c6d600330fd60f7731d5332c5e60ce0a9ce7827fe4df->enter($__internal_a6d038708239a39784c0c6d600330fd60f7731d5332c5e60ce0a9ce7827fe4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3930e297921bb7df01745d391bb66b4ec08161bef8aa2c2314cd14013e34c672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3930e297921bb7df01745d391bb66b4ec08161bef8aa2c2314cd14013e34c672->enter($__internal_3930e297921bb7df01745d391bb66b4ec08161bef8aa2c2314cd14013e34c672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, ($context["newMessages"] ?? $this->getContext($context, "newMessages")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipient"] ?? $this->getContext($context, "recipient")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipient"] ?? $this->getContext($context, "recipient")), "prenom", array()), "html", null, true);
        echo "\" data-placeholder=\"add email\"/>                                
                                </div>
                                <div class=\"col-md-9\">                                        
                                    <input name=\"recipient\" type=\"hidden\" value=\"";
        // line 76
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
        
        $__internal_3930e297921bb7df01745d391bb66b4ec08161bef8aa2c2314cd14013e34c672->leave($__internal_3930e297921bb7df01745d391bb66b4ec08161bef8aa2c2314cd14013e34c672_prof);

        
        $__internal_a6d038708239a39784c0c6d600330fd60f7731d5332c5e60ce0a9ce7827fe4df->leave($__internal_a6d038708239a39784c0c6d600330fd60f7731d5332c5e60ce0a9ce7827fe4df_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7fb5f6aad02e47d6fcf31fdb2c0a07b83720da4139fb96ee6d8e1516cf16fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fb5f6aad02e47d6fcf31fdb2c0a07b83720da4139fb96ee6d8e1516cf16fb4->enter($__internal_f7fb5f6aad02e47d6fcf31fdb2c0a07b83720da4139fb96ee6d8e1516cf16fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f9c3b3c4b1d0bee6ef9d9130f14210c212b4fbf78bcd7036010f55c4ac283e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9c3b3c4b1d0bee6ef9d9130f14210c212b4fbf78bcd7036010f55c4ac283e3->enter($__internal_5f9c3b3c4b1d0bee6ef9d9130f14210c212b4fbf78bcd7036010f55c4ac283e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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

";
        
        $__internal_5f9c3b3c4b1d0bee6ef9d9130f14210c212b4fbf78bcd7036010f55c4ac283e3->leave($__internal_5f9c3b3c4b1d0bee6ef9d9130f14210c212b4fbf78bcd7036010f55c4ac283e3_prof);

        
        $__internal_f7fb5f6aad02e47d6fcf31fdb2c0a07b83720da4139fb96ee6d8e1516cf16fb4->leave($__internal_f7fb5f6aad02e47d6fcf31fdb2c0a07b83720da4139fb96ee6d8e1516cf16fb4_prof);

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

{% endblock %}", "message/new.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/message/new.html.twig");
    }
}
