<?php

/* :message:inbox.html.twig */
class __TwigTemplate_a2db9c60be0d7830d5c5a4281b274c95ba43c895fd95d9c6dccae76ca8558011 extends Twig_Template
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
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) ? ("baseParent.html.twig") : ("base2.html.twig")), ":message:inbox.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e548001c98dbe1f376aae104f1e48d66457d7773d831ea9542f63f43e5f0ae5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e548001c98dbe1f376aae104f1e48d66457d7773d831ea9542f63f43e5f0ae5f->enter($__internal_e548001c98dbe1f376aae104f1e48d66457d7773d831ea9542f63f43e5f0ae5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:inbox.html.twig"));

        $__internal_29d47ad391ca15b8c5c3f452b22a8a8712d58334b0b43e950cc62ea536dad43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d47ad391ca15b8c5c3f452b22a8a8712d58334b0b43e950cc62ea536dad43f->enter($__internal_29d47ad391ca15b8c5c3f452b22a8a8712d58334b0b43e950cc62ea536dad43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":message:inbox.html.twig"));

        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e548001c98dbe1f376aae104f1e48d66457d7773d831ea9542f63f43e5f0ae5f->leave($__internal_e548001c98dbe1f376aae104f1e48d66457d7773d831ea9542f63f43e5f0ae5f_prof);

        
        $__internal_29d47ad391ca15b8c5c3f452b22a8a8712d58334b0b43e950cc62ea536dad43f->leave($__internal_29d47ad391ca15b8c5c3f452b22a8a8712d58334b0b43e950cc62ea536dad43f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ee4b070d007da4c2f20536d588b9e622138432a1bc112533932bce7ac3bd58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee4b070d007da4c2f20536d588b9e622138432a1bc112533932bce7ac3bd58b->enter($__internal_7ee4b070d007da4c2f20536d588b9e622138432a1bc112533932bce7ac3bd58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_440d37f6087602bb002221034d3267a171264b4b326137c714fb4efc5b636e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440d37f6087602bb002221034d3267a171264b4b326137c714fb4efc5b636e11->enter($__internal_440d37f6087602bb002221034d3267a171264b4b326137c714fb4efc5b636e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
                <!-- START CONTENT FRAME -->
                <div class=\"content-frame\">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class=\"content-frame-top\">                        
                        <div class=\"page-title\">                    
                            <h2><span class=\"fa fa-inbox\"></span> Inbox <small>(";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
        echo " unread)</small></h2>
                        </div>                                                                                
                        
                        <div class=\"pull-right\">                            
                            <button class=\"btn btn-default\"><span class=\"fa fa-cogs\"></span> Settings</button>
                            <button class=\"btn btn-default content-frame-left-toggle\"><span class=\"fa fa-bars\"></span></button>
                        </div>                        
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class=\"content-frame-left\">
                        <div class=\"block\">
                            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_adressBook");
        echo "\" class=\"btn btn-danger btn-block btn-lg\"><span class=\"fa fa-edit\"></span> COMPOSE</a>
                        </div>
                        <div class=\"block\">
                            <div class=\"list-group border-bottom\">
                                <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_inbox");
        echo "\" class=\"list-group-item active\"><span class=\"fa fa-inbox\"></span> Inbox <span class=\"badge badge-success\">";
        echo twig_escape_filter($this->env, (isset($context["newMessages"]) ? $context["newMessages"] : $this->getContext($context, "newMessages")), "html", null, true);
        echo "</span></a>
                               <!--  <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-star\"></span> Starred <span class=\"badge badge-warning\">6</span></a> -->
                                <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_sentbox");
        echo "\" class=\"list-group-item\"><span class=\"fa fa-rocket\"></span> Sent</a>
                               <!--  <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-flag\"></span> Flagged</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-trash-o\"></span> Deleted <span class=\"badge badge-default\">1.4k</span></a>   -->                          
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
                        
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <label class=\"check mail-checkall\">
                                    <input type=\"checkbox\" class=\"icheckbox\"/>
                                </label>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply-all\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-forward\"></span></button>
                                </div>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-star\"></span></button>                                    
                                    <button class=\"btn btn-default\"><span class=\"fa fa-flag\"></span></button>
                                </div>                                
                                <button class=\"btn btn-default\"><span class=\"fa fa-warning\"></span></button>
                                <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span></button>                                                                    
                                <div class=\"pull-right\" style=\"width: 150px;\">
                                    <div class=\"input-group\">
                                        <div class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></div>
                                        <input class=\"form-control datepicker\" type=\"text\" data-orientation=\"left\"/>                                    
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel-body mail\">
                                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inbox"]) ? $context["inbox"] : $this->getContext($context, "inbox")));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 78
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_show", array("id" => $this->getAttribute($context["msg"], "id", array()))), "html", null, true);
            echo "\">
                                    <div class=\"mail-item mail-unread mail-info\">                                    
                                        <div class=\"mail-checkbox\">
                                            <input type=\"checkbox\" class=\"icheckbox\"/>
                                        </div>
                                        <div class=\"mail-star\">
                                            <span class=\"fa fa-star-o\"></span>
                                        </div>
                                        <div class=\"mail-user\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "createdBy", array()), "html", null, true);
            echo "</div>                                    
                                        <a href=\"pages-mailbox-message.html\" class=\"mail-text\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["msg"], "subject", array()), "html", null, true);
            echo "</a>                                    
                                        <div class=\"mail-date\">";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["msg"], "createdAt", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</div>
                                    </div>
                                    </a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                                   
                                
                            </div>
                            <div class=\"panel-footer\">                                
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply-all\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-forward\"></span></button>
                                </div>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-star\"></span></button>                                    
                                    <button class=\"btn btn-default\"><span class=\"fa fa-flag\"></span></button>
                                </div>
                                
                                <button class=\"btn btn-default\"><span class=\"fa fa-warning\"></span></button>
                                <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span></button>                                    
                                
                                <ul class=\"pagination pagination-sm pull-right\">
                                    <li class=\"disabled\"><a href=\"#\">«</a></li>
                                    <li class=\"active\"><a href=\"#\">1</a></li>
                                    <li><a href=\"#\">2</a></li>
                                    <li><a href=\"#\">3</a></li>
                                    <li><a href=\"#\">4</a></li>                                    
                                    <li><a href=\"#\">»</a></li>
                                </ul>
                            </div>                            
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
        
        $__internal_440d37f6087602bb002221034d3267a171264b4b326137c714fb4efc5b636e11->leave($__internal_440d37f6087602bb002221034d3267a171264b4b326137c714fb4efc5b636e11_prof);

        
        $__internal_7ee4b070d007da4c2f20536d588b9e622138432a1bc112533932bce7ac3bd58b->leave($__internal_7ee4b070d007da4c2f20536d588b9e622138432a1bc112533932bce7ac3bd58b_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c1ddd8f2a4778d755d712594887b054cd04798143094f1ece6907c28c3d28ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1ddd8f2a4778d755d712594887b054cd04798143094f1ece6907c28c3d28ae->enter($__internal_4c1ddd8f2a4778d755d712594887b054cd04798143094f1ece6907c28c3d28ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dddd27ac2fad07c9bec131caf392788becbfc515c5a5c409148bbe30922c1b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddd27ac2fad07c9bec131caf392788becbfc515c5a5c409148bbe30922c1b54->enter($__internal_dddd27ac2fad07c9bec131caf392788becbfc515c5a5c409148bbe30922c1b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        echo "    <script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/summernote/summernote.js"), "html", null, true);
        echo "\"></script>  
    <script type='text/javascript' src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tagsinput/jquery.tagsinput.min.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script> 
    <script type='text/javascript' src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-file-input.js"), "html", null, true);
        echo "\"></script>    
    <script>
        \$('.active').removeClass('active');
        \$('.msg').addClass('active');
    </script>    

";
        
        $__internal_dddd27ac2fad07c9bec131caf392788becbfc515c5a5c409148bbe30922c1b54->leave($__internal_dddd27ac2fad07c9bec131caf392788becbfc515c5a5c409148bbe30922c1b54_prof);

        
        $__internal_4c1ddd8f2a4778d755d712594887b054cd04798143094f1ece6907c28c3d28ae->leave($__internal_4c1ddd8f2a4778d755d712594887b054cd04798143094f1ece6907c28c3d28ae_prof);

    }

    public function getTemplateName()
    {
        return ":message:inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 158,  258 => 157,  254 => 156,  249 => 155,  240 => 154,  171 => 92,  161 => 88,  157 => 87,  153 => 86,  141 => 78,  137 => 77,  89 => 32,  82 => 30,  75 => 26,  59 => 13,  51 => 7,  42 => 6,  32 => 3,  20 => 1,  19 => 3,);
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
                            <h2><span class=\"fa fa-inbox\"></span> Inbox <small>({{newMessages}} unread)</small></h2>
                        </div>                                                                                
                        
                        <div class=\"pull-right\">                            
                            <button class=\"btn btn-default\"><span class=\"fa fa-cogs\"></span> Settings</button>
                            <button class=\"btn btn-default content-frame-left-toggle\"><span class=\"fa fa-bars\"></span></button>
                        </div>                        
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class=\"content-frame-left\">
                        <div class=\"block\">
                            <a href=\"{{ path('message_adressBook')}}\" class=\"btn btn-danger btn-block btn-lg\"><span class=\"fa fa-edit\"></span> COMPOSE</a>
                        </div>
                        <div class=\"block\">
                            <div class=\"list-group border-bottom\">
                                <a href=\"{{ path('message_inbox')}}\" class=\"list-group-item active\"><span class=\"fa fa-inbox\"></span> Inbox <span class=\"badge badge-success\">{{newMessages}}</span></a>
                               <!--  <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-star\"></span> Starred <span class=\"badge badge-warning\">6</span></a> -->
                                <a href=\"{{ path('message_sentbox')}}\" class=\"list-group-item\"><span class=\"fa fa-rocket\"></span> Sent</a>
                               <!--  <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-flag\"></span> Flagged</a>
                                <a href=\"#\" class=\"list-group-item\"><span class=\"fa fa-trash-o\"></span> Deleted <span class=\"badge badge-default\">1.4k</span></a>   -->                          
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
                        
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <label class=\"check mail-checkall\">
                                    <input type=\"checkbox\" class=\"icheckbox\"/>
                                </label>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply-all\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-forward\"></span></button>
                                </div>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-star\"></span></button>                                    
                                    <button class=\"btn btn-default\"><span class=\"fa fa-flag\"></span></button>
                                </div>                                
                                <button class=\"btn btn-default\"><span class=\"fa fa-warning\"></span></button>
                                <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span></button>                                                                    
                                <div class=\"pull-right\" style=\"width: 150px;\">
                                    <div class=\"input-group\">
                                        <div class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></div>
                                        <input class=\"form-control datepicker\" type=\"text\" data-orientation=\"left\"/>                                    
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel-body mail\">
                                {% for msg in inbox %}
                                    <a href=\"{{ path('message_show',{'id':msg.id})}}\">
                                    <div class=\"mail-item mail-unread mail-info\">                                    
                                        <div class=\"mail-checkbox\">
                                            <input type=\"checkbox\" class=\"icheckbox\"/>
                                        </div>
                                        <div class=\"mail-star\">
                                            <span class=\"fa fa-star-o\"></span>
                                        </div>
                                        <div class=\"mail-user\">{{msg.createdBy}}</div>                                    
                                        <a href=\"pages-mailbox-message.html\" class=\"mail-text\">{{msg.subject}}</a>                                    
                                        <div class=\"mail-date\">{{msg.createdAt|date(\"F jS \\\\a\\\\t g:ia\")}}</div>
                                    </div>
                                    </a>
                                {% endfor %}
                                   
                                
                            </div>
                            <div class=\"panel-footer\">                                
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-reply-all\"></span></button>
                                    <button class=\"btn btn-default\"><span class=\"fa fa-mail-forward\"></span></button>
                                </div>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default\"><span class=\"fa fa-star\"></span></button>                                    
                                    <button class=\"btn btn-default\"><span class=\"fa fa-flag\"></span></button>
                                </div>
                                
                                <button class=\"btn btn-default\"><span class=\"fa fa-warning\"></span></button>
                                <button class=\"btn btn-default\"><span class=\"fa fa-trash-o\"></span></button>                                    
                                
                                <ul class=\"pagination pagination-sm pull-right\">
                                    <li class=\"disabled\"><a href=\"#\">«</a></li>
                                    <li class=\"active\"><a href=\"#\">1</a></li>
                                    <li><a href=\"#\">2</a></li>
                                    <li><a href=\"#\">3</a></li>
                                    <li><a href=\"#\">4</a></li>                                    
                                    <li><a href=\"#\">»</a></li>
                                </ul>
                            </div>                            
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

{% endblock %}", ":message:inbox.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/message/inbox.html.twig");
    }
}
