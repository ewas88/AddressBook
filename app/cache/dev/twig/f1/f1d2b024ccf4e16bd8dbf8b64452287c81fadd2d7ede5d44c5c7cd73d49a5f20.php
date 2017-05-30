<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_7a22037a1d1770c3b3d40414ecb8473cdc6a100de493b445b8cad35ce5315c86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e465793e6a05e5f00129f81e440490262e254a99bd9b51bd84a39847335731f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e465793e6a05e5f00129f81e440490262e254a99bd9b51bd84a39847335731f4->enter($__internal_e465793e6a05e5f00129f81e440490262e254a99bd9b51bd84a39847335731f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway\">

    </head>
    </head>
    <body>
        <div>
            <div class=\"w3-container w3-teal w3-center\">
                <h1>ADDRESS BOOK</h1>
            ";
        // line 49
        echo "            ";
        // line 50
        echo "                ";
        // line 51
        echo "                ";
        // line 52
        echo "                    ";
        // line 53
        echo "                ";
        // line 54
        echo "            ";
        // line 55
        echo "                ";
        // line 56
        echo "            ";
        // line 57
        echo "        </div>

        ";
        // line 59
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 60
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 61
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 62
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 63
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "        ";
        }
        // line 68
        echo "
        <div>
            ";
        // line 70
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 72
        echo "        </div>
    </body>
</html>
";
        
        $__internal_e465793e6a05e5f00129f81e440490262e254a99bd9b51bd84a39847335731f4->leave($__internal_e465793e6a05e5f00129f81e440490262e254a99bd9b51bd84a39847335731f4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_523722e5fd4c05cee547df94159aeac49a3426ba5f8052c69895c82f82f87b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523722e5fd4c05cee547df94159aeac49a3426ba5f8052c69895c82f82f87b8f->enter($__internal_523722e5fd4c05cee547df94159aeac49a3426ba5f8052c69895c82f82f87b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "            <style>
                body, div, p, a {
                    font-family: \"Raleway\", sans-serif
                }

                .ex1 {
                    margin: 1cm 8cm 0cm 8cm;
                }

                .ex2 {
                    margin: 3cm 8cm 0cm 8cm;
                }

                .ex3 {
                    margin: 4cm auto auto 11cm;
                }

                .ex4 {
                    margin: 1cm 3cm 0cm auto;
                }

                .pattern {
                    background-image: url(\"https://www.toptal.com/designers/subtlepatterns/patterns/swirl_pattern.png\");
                    background-repeat: repeat;
                }

                .ex5 {
                    margin: 4cm 3cm 0cm auto;
                }

            </style>
        ";
        
        $__internal_523722e5fd4c05cee547df94159aeac49a3426ba5f8052c69895c82f82f87b8f->leave($__internal_523722e5fd4c05cee547df94159aeac49a3426ba5f8052c69895c82f82f87b8f_prof);

    }

    // line 70
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb31edf91847e0d3df8024a021251a0dbe519f994cef0ea8c46b0e3b7553d92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb31edf91847e0d3df8024a021251a0dbe519f994cef0ea8c46b0e3b7553d92f->enter($__internal_fb31edf91847e0d3df8024a021251a0dbe519f994cef0ea8c46b0e3b7553d92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 71
        echo "            ";
        
        $__internal_fb31edf91847e0d3df8024a021251a0dbe519f994cef0ea8c46b0e3b7553d92f->leave($__internal_fb31edf91847e0d3df8024a021251a0dbe519f994cef0ea8c46b0e3b7553d92f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 71,  159 => 70,  121 => 6,  115 => 5,  105 => 72,  103 => 70,  99 => 68,  96 => 67,  90 => 66,  81 => 63,  76 => 62,  71 => 61,  66 => 60,  64 => 59,  60 => 57,  58 => 56,  56 => 55,  54 => 54,  52 => 53,  50 => 52,  48 => 51,  46 => 50,  44 => 49,  32 => 38,  30 => 5,  24 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        {% block stylesheets %}
            <style>
                body, div, p, a {
                    font-family: \"Raleway\", sans-serif
                }

                .ex1 {
                    margin: 1cm 8cm 0cm 8cm;
                }

                .ex2 {
                    margin: 3cm 8cm 0cm 8cm;
                }

                .ex3 {
                    margin: 4cm auto auto 11cm;
                }

                .ex4 {
                    margin: 1cm 3cm 0cm auto;
                }

                .pattern {
                    background-image: url(\"https://www.toptal.com/designers/subtlepatterns/patterns/swirl_pattern.png\");
                    background-repeat: repeat;
                }

                .ex5 {
                    margin: 4cm 3cm 0cm auto;
                }

            </style>
        {% endblock %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway\">

    </head>
    </head>
    <body>
        <div>
            <div class=\"w3-container w3-teal w3-center\">
                <h1>ADDRESS BOOK</h1>
            {#</div>#}
            {#{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
                {#{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}
                {#<a href=\"{{ path('fos_user_security_logout') }}\">#}
                    {#{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}#}
                {#</a>#}
            {#{% else %}#}
                {#<a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}
            {#{% endif %}#}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "@FOSUser/layout.html.twig", "/home/ewa/Workspace/AddressBook/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
