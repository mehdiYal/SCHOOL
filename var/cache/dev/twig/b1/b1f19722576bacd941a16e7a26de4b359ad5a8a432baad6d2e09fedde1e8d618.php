<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68ac4febf6ff68a19208afee424f89dfbdf3a94cb55be1dcb620e181f9399547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ac4febf6ff68a19208afee424f89dfbdf3a94cb55be1dcb620e181f9399547->enter($__internal_68ac4febf6ff68a19208afee424f89dfbdf3a94cb55be1dcb620e181f9399547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0c64cfd32e5896d2c455339ab4f0473ebe667c9bfd254d33fd7ae56d7099dc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c64cfd32e5896d2c455339ab4f0473ebe667c9bfd254d33fd7ae56d7099dc3f->enter($__internal_0c64cfd32e5896d2c455339ab4f0473ebe667c9bfd254d33fd7ae56d7099dc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
         <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme-default.css"), "html", null, true);
        echo "\"/>
        
    </head>
    <body style=\"height: 100%;\">
        
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "
    </body>
</html>
";
        
        $__internal_68ac4febf6ff68a19208afee424f89dfbdf3a94cb55be1dcb620e181f9399547->leave($__internal_68ac4febf6ff68a19208afee424f89dfbdf3a94cb55be1dcb620e181f9399547_prof);

        
        $__internal_0c64cfd32e5896d2c455339ab4f0473ebe667c9bfd254d33fd7ae56d7099dc3f->leave($__internal_0c64cfd32e5896d2c455339ab4f0473ebe667c9bfd254d33fd7ae56d7099dc3f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0e17ebca57f91b83df758c555cbca06bb991c572d9a135af287c0177ae60a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e17ebca57f91b83df758c555cbca06bb991c572d9a135af287c0177ae60a4d->enter($__internal_a0e17ebca57f91b83df758c555cbca06bb991c572d9a135af287c0177ae60a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b2b4ddeaabae6878b53d5e90211c6696f73ee686abbc405631698a914a16063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2b4ddeaabae6878b53d5e90211c6696f73ee686abbc405631698a914a16063->enter($__internal_4b2b4ddeaabae6878b53d5e90211c6696f73ee686abbc405631698a914a16063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4b2b4ddeaabae6878b53d5e90211c6696f73ee686abbc405631698a914a16063->leave($__internal_4b2b4ddeaabae6878b53d5e90211c6696f73ee686abbc405631698a914a16063_prof);

        
        $__internal_a0e17ebca57f91b83df758c555cbca06bb991c572d9a135af287c0177ae60a4d->leave($__internal_a0e17ebca57f91b83df758c555cbca06bb991c572d9a135af287c0177ae60a4d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdbe5af0de531b5d257c17e594b6461555d1292918fd162fd1baf4a757dba8a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdbe5af0de531b5d257c17e594b6461555d1292918fd162fd1baf4a757dba8a8->enter($__internal_bdbe5af0de531b5d257c17e594b6461555d1292918fd162fd1baf4a757dba8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cc59a2ccf30d2983b0431f7e571aa731843891726958f1fe958137f833668eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc59a2ccf30d2983b0431f7e571aa731843891726958f1fe958137f833668eca->enter($__internal_cc59a2ccf30d2983b0431f7e571aa731843891726958f1fe958137f833668eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cc59a2ccf30d2983b0431f7e571aa731843891726958f1fe958137f833668eca->leave($__internal_cc59a2ccf30d2983b0431f7e571aa731843891726958f1fe958137f833668eca_prof);

        
        $__internal_bdbe5af0de531b5d257c17e594b6461555d1292918fd162fd1baf4a757dba8a8->leave($__internal_bdbe5af0de531b5d257c17e594b6461555d1292918fd162fd1baf4a757dba8a8_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b1b5d274545d194f25146c9eff3fe7952382a0fd2715a1f856d7b7ccc6e01db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1b5d274545d194f25146c9eff3fe7952382a0fd2715a1f856d7b7ccc6e01db->enter($__internal_4b1b5d274545d194f25146c9eff3fe7952382a0fd2715a1f856d7b7ccc6e01db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a94d52b415a4aadee3efff28940aa41f3fa226918f521eaa8fd2cf9bd677293f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94d52b415a4aadee3efff28940aa41f3fa226918f521eaa8fd2cf9bd677293f->enter($__internal_a94d52b415a4aadee3efff28940aa41f3fa226918f521eaa8fd2cf9bd677293f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a94d52b415a4aadee3efff28940aa41f3fa226918f521eaa8fd2cf9bd677293f->leave($__internal_a94d52b415a4aadee3efff28940aa41f3fa226918f521eaa8fd2cf9bd677293f_prof);

        
        $__internal_4b1b5d274545d194f25146c9eff3fe7952382a0fd2715a1f856d7b7ccc6e01db->leave($__internal_4b1b5d274545d194f25146c9eff3fe7952382a0fd2715a1f856d7b7ccc6e01db_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ddffb6d14c8aa4c15a01df79c58697de1722845c882e0379a42ce426e7fafe1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddffb6d14c8aa4c15a01df79c58697de1722845c882e0379a42ce426e7fafe1b->enter($__internal_ddffb6d14c8aa4c15a01df79c58697de1722845c882e0379a42ce426e7fafe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9bdfd2e2b6b4d3ec85bc59a1fa70ac49550f14d60422f1a4501122fe91067f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdfd2e2b6b4d3ec85bc59a1fa70ac49550f14d60422f1a4501122fe91067f9d->enter($__internal_9bdfd2e2b6b4d3ec85bc59a1fa70ac49550f14d60422f1a4501122fe91067f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        ";
        
        $__internal_9bdfd2e2b6b4d3ec85bc59a1fa70ac49550f14d60422f1a4501122fe91067f9d->leave($__internal_9bdfd2e2b6b4d3ec85bc59a1fa70ac49550f14d60422f1a4501122fe91067f9d_prof);

        
        $__internal_ddffb6d14c8aa4c15a01df79c58697de1722845c882e0379a42ce426e7fafe1b->leave($__internal_ddffb6d14c8aa4c15a01df79c58697de1722845c882e0379a42ce426e7fafe1b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 16,  126 => 15,  109 => 13,  92 => 6,  74 => 5,  61 => 17,  59 => 15,  56 => 14,  54 => 13,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
         <link rel=\"stylesheet\" type=\"text/css\" id=\"theme\" href=\"{{ asset('css/theme-default.css') }}\"/>
        
    </head>
    <body style=\"height: 100%;\">
        
        {% block body %}{% endblock %}

        {% block javascripts %}
        {% endblock %}

    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/base.html.twig");
    }
}
