<?php

/* FOSMessageBundle:Message:threads_list.html.twig */
class __TwigTemplate_2fb21104f0a7f74f0dca614a289fa8d4b81da98dd2a46c37886a520ab4022ac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_862daa2dc325d142665ba0c0dc73c9ba9351822fe15faf0a27c5947fafb51fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_862daa2dc325d142665ba0c0dc73c9ba9351822fe15faf0a27c5947fafb51fb5->enter($__internal_862daa2dc325d142665ba0c0dc73c9ba9351822fe15faf0a27c5947fafb51fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:threads_list.html.twig"));

        $__internal_dd0cc22f19bf39574271d5572c6e4856c9f0b0d34f4b0fab4dbd82457953faf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0cc22f19bf39574271d5572c6e4856c9f0b0d34f4b0fab4dbd82457953faf0->enter($__internal_dd0cc22f19bf39574271d5572c6e4856c9f0b0d34f4b0fab4dbd82457953faf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:threads_list.html.twig"));

        // line 1
        echo "<table>

    <thead>
        <tr>
            <th>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("subject", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("starter", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("startdate", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messages", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("last_message", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("actions", array(), "FOSMessageBundle");
        echo "</th>
        </tr>
    </thead>

    <tbody>

    ";
        // line 16
        if ((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads"))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 18
                echo "            <tr>
                <td>
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "subject", array()), "html", null, true);
                echo "
                    </a>

                    ";
                // line 24
                if ( !$this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isRead($context["thread"])) {
                    // line 25
                    echo "                        (";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("new", array(), "FOSMessageBundle");
                    echo ")
                    ";
                }
                // line 27
                echo "                </td>
                <td>
                    ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "createdBy", array()), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["thread"], "createdAt", array())), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 35
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["thread"], "messages", array())), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 38
                if ($this->getAttribute($context["thread"], "lastMessage", array())) {
                    // line 39
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                    echo "#message_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "id", array()), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("goto_last", array(), "FOSMessageBundle");
                    echo "\">
                            →
                        </a>
                        ";
                    // line 42
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("on", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "createdAt", array()))), "FOSMessageBundle");
                    // line 43
                    echo "                        <br />
                        ";
                    // line 44
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("by", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "sender", array()))), "FOSMessageBundle");
                    // line 45
                    echo "                    ";
                } else {
                    // line 46
                    echo "                        ----
                    ";
                }
                // line 48
                echo "                </td>
                <td>
                    ";
                // line 50
                if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->canDeleteThread($context["thread"])) {
                    // line 51
                    echo "                        ";
                    if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isThreadDeletedByParticipant($context["thread"])) {
                        // line 52
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_undelete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 53
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("undelete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 54
                        echo "                        ";
                    } else {
                        // line 55
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_delete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 56
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("delete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 57
                        echo "                        ";
                    }
                    // line 58
                    echo "                        <form action=\"";
                    echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")), "html", null, true);
                    echo "\" method=\"post\">
                                <input type=\"submit\" value=\"";
                    // line 59
                    echo twig_escape_filter($this->env, (isset($context["submitValue"]) ? $context["submitValue"] : $this->getContext($context, "submitValue")), "html", null, true);
                    echo "\" />
                        </form>
                    ";
                }
                // line 62
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "    ";
        } else {
            // line 66
            echo "        <tr>
            <td colspan=\"6\">
                ";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("no_thread", array(), "FOSMessageBundle");
            echo ".
            </td>
        </tr>
    ";
        }
        // line 72
        echo "
    </tbody>

</table>
";
        
        $__internal_862daa2dc325d142665ba0c0dc73c9ba9351822fe15faf0a27c5947fafb51fb5->leave($__internal_862daa2dc325d142665ba0c0dc73c9ba9351822fe15faf0a27c5947fafb51fb5_prof);

        
        $__internal_dd0cc22f19bf39574271d5572c6e4856c9f0b0d34f4b0fab4dbd82457953faf0->leave($__internal_dd0cc22f19bf39574271d5572c6e4856c9f0b0d34f4b0fab4dbd82457953faf0_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:threads_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 72,  199 => 68,  195 => 66,  192 => 65,  184 => 62,  178 => 59,  173 => 58,  170 => 57,  165 => 56,  160 => 55,  157 => 54,  152 => 53,  147 => 52,  144 => 51,  142 => 50,  138 => 48,  134 => 46,  131 => 45,  129 => 44,  126 => 43,  124 => 42,  113 => 39,  111 => 38,  105 => 35,  99 => 32,  93 => 29,  89 => 27,  83 => 25,  81 => 24,  75 => 21,  71 => 20,  67 => 18,  62 => 17,  60 => 16,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table>

    <thead>
        <tr>
            <th>{% trans from 'FOSMessageBundle' %}subject{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}starter{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}startdate{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}messages{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}last_message{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}actions{% endtrans %}</th>
        </tr>
    </thead>

    <tbody>

    {% if threads %}
        {% for thread in threads %}
            <tr>
                <td>
                    <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\">
                        {{ thread.subject }}
                    </a>

                    {% if not fos_message_is_read(thread) %}
                        ({% trans from 'FOSMessageBundle' %}new{% endtrans %})
                    {% endif %}
                </td>
                <td>
                    {{ thread.createdBy }}
                </td>
                <td>
                    {{ thread.createdAt|date }}
                </td>
                <td>
                    {{ thread.messages|length }}
                </td>
                <td>
                    {% if thread.lastMessage %}
                        <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}#message_{{ thread.lastMessage.id }}\" title=\"{% trans from 'FOSMessageBundle' %}goto_last{% endtrans %}\">
                            →
                        </a>
                        {% trans with {'%date%': thread.lastMessage.createdAt|date} from 'FOSMessageBundle' %}on{% endtrans %}
                        <br />
                        {% trans with {'%sender%': thread.lastMessage.sender|e } from 'FOSMessageBundle' %}by{% endtrans %}
                    {% else %}
                        ----
                    {% endif %}
                </td>
                <td>
                    {% if fos_message_can_delete_thread(thread) %}
                        {% if fos_message_deleted_by_participant(thread) %}
                            {% set formAction %}{{ url('fos_message_thread_undelete', {'threadId': thread.id}) }}{% endset %}
                            {% set submitValue %}{% trans from 'FOSMessageBundle' %}undelete{% endtrans %}{% endset %}
                        {% else %}
                            {% set formAction %}{{ url('fos_message_thread_delete', {'threadId': thread.id}) }}{% endset %}
                            {% set submitValue %}{% trans from 'FOSMessageBundle' %}delete{% endtrans %}{% endset %}
                        {% endif %}
                        <form action=\"{{ formAction }}\" method=\"post\">
                                <input type=\"submit\" value=\"{{ submitValue }}\" />
                        </form>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"6\">
                {% trans from 'FOSMessageBundle' %}no_thread{% endtrans %}.
            </td>
        </tr>
    {% endif %}

    </tbody>

</table>
", "FOSMessageBundle:Message:threads_list.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\friendsofsymfony\\message-bundle\\FOS\\MessageBundle/Resources/views/Message/threads_list.html.twig");
    }
}
