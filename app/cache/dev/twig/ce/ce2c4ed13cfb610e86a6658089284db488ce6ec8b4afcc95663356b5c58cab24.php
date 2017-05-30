<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_d4d9f1ad06d778546a74580a6d52b2d8e52fc7ffb8ff7011325c70d572fc19a9 extends Twig_Template
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
        $__internal_be506c1feb0b48bdbcd90a2480adb5cf18e20703c402625a8632a1e092505ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be506c1feb0b48bdbcd90a2480adb5cf18e20703c402625a8632a1e092505ef7->enter($__internal_be506c1feb0b48bdbcd90a2480adb5cf18e20703c402625a8632a1e092505ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<div class=\"w3-container w3-lime\" style=\"font-size: x-large\">
    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 9
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 10
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
        ";
        }
        // line 12
        echo "        <h1>LOGIN FORM</h1>
        <label for=\"username\"> Username: </label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>
        <br>
        <label for=\"password\"> Password: </label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
        <br>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
        <label for=\"remember_me\">remember me</label>
        <br>
        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"log in\"/>
    </form>
</div>";
        
        $__internal_be506c1feb0b48bdbcd90a2480adb5cf18e20703c402625a8632a1e092505ef7->leave($__internal_be506c1feb0b48bdbcd90a2480adb5cf18e20703c402625a8632a1e092505ef7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  49 => 12,  43 => 10,  41 => 9,  37 => 8,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"w3-container w3-lime\" style=\"font-size: x-large\">
    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
        {% endif %}
        <h1>LOGIN FORM</h1>
        <label for=\"username\"> Username: </label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"/>
        <br>
        <label for=\"password\"> Password: </label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
        <br>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
        <label for=\"remember_me\">remember me</label>
        <br>
        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"log in\"/>
    </form>
</div>", "@FOSUser/Security/login_content.html.twig", "/home/ewa/Workspace/AddressBook/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
