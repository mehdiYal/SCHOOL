<?php

/* message/new.html.twig */
class __TwigTemplate_0dd4548ba527b78628b364c1311a79dece9cac9a5ff7ad3369bbb6643bd2954e extends Twig_Template
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
        $__internal_397789d57f49c9f34aa829079021ae7941de194b2ac16ff23ef47280e03aea2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397789d57f49c9f34aa829079021ae7941de194b2ac16ff23ef47280e03aea2a->enter($__internal_397789d57f49c9f34aa829079021ae7941de194b2ac16ff23ef47280e03aea2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/new.html.twig"));

        $__internal_5ecaea34818810ca529efc9e6bab0bb9a8b77100356c3608fe650e165a6b73a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecaea34818810ca529efc9e6bab0bb9a8b77100356c3608fe650e165a6b73a7->enter($__internal_5ecaea34818810ca529efc9e6bab0bb9a8b77100356c3608fe650e165a6b73a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_397789d57f49c9f34aa829079021ae7941de194b2ac16ff23ef47280e03aea2a->leave($__internal_397789d57f49c9f34aa829079021ae7941de194b2ac16ff23ef47280e03aea2a_prof);

        
        $__internal_5ecaea34818810ca529efc9e6bab0bb9a8b77100356c3608fe650e165a6b73a7->leave($__internal_5ecaea34818810ca529efc9e6bab0bb9a8b77100356c3608fe650e165a6b73a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f612fe98353b964208274973125b9e62a6e6f9abb4c01104c1e06cfe0818e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f612fe98353b964208274973125b9e62a6e6f9abb4c01104c1e06cfe0818e0d->enter($__internal_4f612fe98353b964208274973125b9e62a6e6f9abb4c01104c1e06cfe0818e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3d7005e483c7738a1b5026969fe8a468f61c273690f5495aed579817b8af945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d7005e483c7738a1b5026969fe8a468f61c273690f5495aed579817b8af945->enter($__internal_b3d7005e483c7738a1b5026969fe8a468f61c273690f5495aed579817b8af945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
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
                                    <input name=\"recipient\" type=\"text\" class=\"tagsinput\" value=\"\" data-placeholder=\"add email\"/>                                
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
        
        $__internal_b3d7005e483c7738a1b5026969fe8a468f61c273690f5495aed579817b8af945->leave($__internal_b3d7005e483c7738a1b5026969fe8a468f61c273690f5495aed579817b8af945_prof);

        
        $__internal_4f612fe98353b964208274973125b9e62a6e6f9abb4c01104c1e06cfe0818e0d->leave($__internal_4f612fe98353b964208274973125b9e62a6e6f9abb4c01104c1e06cfe0818e0d_prof);

    }

    // line 148
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc811b22e7ae39342608d5a0c09a6c494ef1f0d090819bae3292f41dcfa78a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc811b22e7ae39342608d5a0c09a6c494ef1f0d090819bae3292f41dcfa78a7a->enter($__internal_fc811b22e7ae39342608d5a0c09a6c494ef1f0d090819bae3292f41dcfa78a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5eebe2db07f5ba060cb324747f4f1df678621f11c2029302d6120dc536872ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eebe2db07f5ba060cb324747f4f1df678621f11c2029302d6120dc536872ca4->enter($__internal_5eebe2db07f5ba060cb324747f4f1df678621f11c2029302d6120dc536872ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 149
        echo "    <script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/summernote/summernote.js"), "html", null, true);
        echo "\"></script>  
    <script type='text/javascript' src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>          

";
        
        $__internal_5eebe2db07f5ba060cb324747f4f1df678621f11c2029302d6120dc536872ca4->leave($__internal_5eebe2db07f5ba060cb324747f4f1df678621f11c2029302d6120dc536872ca4_prof);

        
        $__internal_fc811b22e7ae39342608d5a0c09a6c494ef1f0d090819bae3292f41dcfa78a7a->leave($__internal_fc811b22e7ae39342608d5a0c09a6c494ef1f0d090819bae3292f41dcfa78a7a_prof);

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
        return array (  234 => 152,  230 => 151,  226 => 150,  221 => 149,  212 => 148,  104 => 48,  80 => 27,  73 => 25,  50 => 4,  41 => 3,  11 => 1,);
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
                                    <input name=\"recipient\" type=\"text\" class=\"tagsinput\" value=\"\" data-placeholder=\"add email\"/>                                
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

{% endblock %}", "message/new.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\message\\new.html.twig");
    }
}
